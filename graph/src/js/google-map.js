var mapContact, mapLocations
var infoMapContact, infoMapLocations

var markersDataLeft = [
  {
    lat: 40.6486333,
    lng: -8.745,
    name: 'Camping Praia do Farol',
    address1: 'Rua Diogo Cão, 125',
    address2: 'Praia da Barra',
    postalCode: '3830-772 Gafanha da Nazaré' // don't insert comma in the last item of each marker
  },
  {
    lat: 40.54955,
    lng: -8.7498167,
    name: 'Camping Costa Velha',
    address1: 'Quinta dos Patos, n.º 2',
    address2: 'Praia da Costa Nova',
    postalCode: '3830-453 Gafanha da Encarnação' // don't insert comma in the last item of each marker
  },
  {
    lat: 40.6447167,
    lng: -8.7129167,
    name: 'Camping Gafanha da Boavista',
    address1: 'Rua dos Balneários do Complexo Desportivo',
    address2: 'Gafanha da Nazaré',
    postalCode: '3830-225 Gafanha da Nazaré'
  }
]

var markersDataRight = [
  {
    lat: 40.6386333,
    lng: -8.745,
    name: 'Camping Praia da Barra',
    address1: 'Rua Diogo Cão, 125',
    address2: 'Praia da Barra',
    postalCode: '3830-772 Gafanha da Nazaré'
  },
  {
    lat: 40.59955,
    lng: -8.7498167,
    name: 'Camping Costa Nova',
    address1: 'Quinta dos Patos, n.º 2',
    address2: 'Praia da Costa Nova',
    postalCode: '3830-453 Gafanha da Encarnação'
  },
  {
    lat: 40.6247167,
    lng: -8.7129167,
    name: 'Camping Gafanha da Nazaré',
    address1: 'Rua dos Balneários do Complexo Desportivo',
    address2: 'Gafanha da Nazaré',
    postalCode: '3830-225 Gafanha da Nazaré'
  }
]

function initialize (setMap) {

  var mapOptions

  if (setMap == 'mapContact') {
    mapOptions = {
      center: new google.maps.LatLng(40.601203, -8.668173),
      zoom: 11,
      mapTypeId: 'roadmap'
    }

    mapContact = new google.maps.Map(document.getElementById('map-contact'), mapOptions)

    // a new Info Window is created
    infoMapContact = new google.maps.InfoWindow()

    // Event that closes the Info Window with a click on the map
    google.maps.event.addListener(mapContact, 'click', function () {
      infoMapContact.close()
    })

  } else {

    mapOptions = {
      center: new google.maps.LatLng(40.601203, -8.668173),
      zoom: 9,
      mapTypeId: 'roadmap'
    }

    mapLocations = new google.maps.Map(document.getElementById('map-locations'), mapOptions)

    // a new Info Window is created
    infoMapLocations = new google.maps.InfoWindow()

    // Event that closes the Info Window with a click on the map
    google.maps.event.addListener(mapLocations, 'click', function () {
      infoMapLocations.close()
    })
  }

  // Finally displayMarkers() function is called to begin the markers creation
  displayMarkers(setMap)

  // Create second map only when initialize function is called for the first time.
  // Second time setMap is equal to mapLocations, so this condition returns false and it will not run
  if (setMap == 'mapContact') {
    initialize('mapLocations')
  }

}

google.maps.event.addDomListener(window, 'load', function(){ initialize("mapContact") });

// This function will iterate over markersData array
// creating markers with createMarker function
function displayMarkers (setMap) {

  var markersData
  var map

  if (setMap == 'mapContact') {
    markersData = markersDataLeft
    map = mapContact
  } else {
    markersData = markersDataRight
    map = mapLocations
  }

  // this variable sets the map bounds according to markers position
  var bounds = new google.maps.LatLngBounds()

  // for loop traverses markersData array calling createMarker function for each marker
  for (var i = 0; i < markersData.length; i++) {

    var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng)
    var name = markersData[i].name
    var address1 = markersData[i].address1
    var address2 = markersData[i].address2
    var postalCode = markersData[i].postalCode

    createMarker(setMap, latlng, name, address1, address2, postalCode)

    // marker position is added to bounds variable
    bounds.extend(latlng)
  }

  // Finally the bounds variable is used to set the map bounds
  // with fitBounds() function
  map.fitBounds(bounds)
}

// This function creates each marker and it sets their Info Window content
function createMarker (setMap, latlng, name, address1, address2, postalCode) {

  var map
  var infoWindow

  if (setMap == 'mapContact') {
    map = mapContact
    infoWindow = infoMapContact
  } else {
    map = mapLocations
    infoWindow = infoMapLocations
  }

  var marker = new google.maps.Marker({
    map: map,
    position: latlng,
    title: name
  })

  // This event expects a click on a marker
  // When this event is fired the Info Window content is created
  // and the Info Window is opened.
  google.maps.event.addListener(marker, 'click', function () {

    // Creating the content to be inserted in the infowindow
    var iwContent = '<div id="iw_container">' +
      '<div class="iw_title">' + name + '</div>' +
      '<div class="iw_content">' + address1 + '<br />' +
      address2 + '<br />' +
      postalCode + '</div></div>'

    // including content to the Info Window.
    infoWindow.setContent(iwContent)

    // opening the Info Window in the current map and at the current marker location.
    infoWindow.open(map, marker)
  })
}
