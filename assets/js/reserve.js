'use strict'

// google API
const API_KEY = 'AIzaSyC97AEclCTslyM2V3YTVFaNrecngF3uH0w'
const CALENDAR_ID = 'qs9fuv1lvl15snqecn0c58n0i4@group.calendar.google.com';
const CLIENT_ID = '507396238793-88mtbp563rkjsnp3n9agckcjha136ifq.apps.googleusercontent.com'

let calendar = null

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'timeGridWeek',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: ''
    },
    locale: 'ja',
    displayEventTime: false, // don't show the time column in list view

    // テストキー
    googleCalendarApiKey: 'AIzaSyC97AEclCTslyM2V3YTVFaNrecngF3uH0w',
    // 本番用キー
    // googleCalendarApiKey: 'AIzaSyCa6wPZlPPoPd2LWpKA3HXPplOoSk1RGtE',
    events: 'qs9fuv1lvl15snqecn0c58n0i4@group.calendar.google.com',
    eventColor: '#836c39',

    eventClick: function(arg) {
      // opens events in a popup window
      window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');
      arg.jsEvent.preventDefault() // don't navigate in main tab
    },
    dateClick: function(clickDatetime) {
      let now = dateFns.format(new Date(), "YYYY-MM-DDTHH:MM:ss")
      function inputDatePicker () {
        modal.style.display = 'block'

          gapi.load("client:auth2", function() {
            gapi.auth2.init({client_id: CLIENT_ID});
          });
          gapi.client.setApiKey(API_KEY);
          gapi.client.load("https://content.googleapis.com/discovery/v1/apis/calendar/v3/rest")

          let startDate = {
            minDate: "today",
            dateFormat: "Y年m月d日",
            defaultDate: dateFns.format(clickDatetime.dateStr, 'YYYY-MM-DD')
          }
          let startTime = {
            enableTime: true,
            noCalendar: true,
            time_24hr: true,
            dateFormat: "H:i",
            minuteIncrement: 30,
            defaultDate: dateFns.format(clickDatetime.dateStr, 'HH-mm')
          }
          let endDate = {
            minDate: "today",
            dateFormat: "Y年m月d日",
            defaultDate: dateFns.format(dateFns.addMinutes(clickDatetime.dateStr, 30), 'YYYY-MM-DD')
          }
          let endTime = {
            enableTime: true,
            noCalendar: true,
            time_24hr: true,
            dateFormat: "H:i",
            minuteIncrement: 30,
            defaultDate: dateFns.format(dateFns.addMinutes(clickDatetime.dateStr, 30), 'HH-mm')
          }
          console.log(startTime.defaultDate)

          flatpickr('.reserve__startDate', startDate);
          flatpickr('.reserve__startTime', startTime);
          flatpickr('.reserve__endDate', endDate);
          flatpickr('.reserve__endTime', endTime);
      }

      if(clickDatetime.dateStr < now) {
        alert('過去の時刻に予約はできません。')
        return false
      } else {
        if(!gapi.auth2.getAuthInstance().isSignedIn.get()) {
          gapi.auth2.getAuthInstance().signIn({scope: "https://www.googleapis.com/auth/calendar https://www.googleapis.com/auth/calendar.events"})
          .then(function() {
            console.log("Sign-in successful");
            signinChanged()
            inputDatePicker()
          },
            function(err) { console.error("Error signing in", err); });
        } else {
         inputDatePicker()
        }
      }
    },

    loading: function(bool) {
      document.getElementById('loading').style.display =
        bool ? 'block' : 'none';
    }
  });

  calendar.render()

});

// Make sure the client is loaded and sign-in is complete before calling this method.
function execute() {
  const roomName = document.getElementById('room-name').value
  const startDate = document.getElementById('start-date').value.replace(/年/g, '-').replace(/月/g, '-').replace(/日/g, '')
  const startTime = document.getElementById('start-time').value
  const startDateTime = startDate + 'T' + startTime + ':10+09:00'
  const endDate = document.getElementById('end-date').value.replace(/年/g, '-').replace(/月/g, '-').replace(/日/g, '')
  const endTime = document.getElementById('end-time').value
  const endDateTime = endDate + 'T' + endTime + ':10+09:00'

  return gapi.client.calendar.events.insert({
    "calendarId": CALENDAR_ID,
    "resource": {
      'summary': roomName,
      'start': {
        'dateTime': startDateTime,
        'timeZone': 'Asia/Tokyo'
      },
      'end': {
        'dateTime': endDateTime,
        'timeZone': 'Asia/Tokyo'
      }
    }
  })
  .then(function(response) {
      // Handle the results here (response.result has the parsed body).
      modal.style.display = 'none';
      calendar.refetchEvents()
      // location.reload()
    },
    function(err) { console.error("Execute error", err);
  });
}

function signinChanged() {
  document.getElementById('sign-in-button').style.display = 'none'
  document.getElementById('sign-out-button').style.display = 'block'
}

function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut()
  document.getElementById('sign-in-button').style.display = 'block'
  document.getElementById('sign-out-button').style.display = 'none'
}

function authenticate() {
  return gapi.auth2.getAuthInstance()
    .signIn({scope: "https://www.googleapis.com/auth/calendar https://www.googleapis.com/auth/calendar.events"})
    .then(function() { console.log("Sign-in successful"); },
      function(err) { console.error("Error signing in", err); });
}

(function decideShowSignInButton (){
  gapi.load("client:auth2", function() {
    gapi.auth2.init({client_id: CLIENT_ID})
    .then(function() {
      if(!gapi.auth2.getAuthInstance().isSignedIn.get()) {
        document.getElementById('sign-in-button').style.display = 'block'
      }
    })
  });
}())


// modal
window.onload = function() {
  const closeButton = document.getElementById('closeBtn');

  closeButton.addEventListener('click', function() {
    modal.style.display = 'none';
  })
}