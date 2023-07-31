@extends('layouts/layoutMaster')

@section('title', 'Peta Klasifikasi')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/leaflet/leaflet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>



@endsection

@section('page-script')

    <script src="{{ asset('assets/js/maps-leaflet.js') }}"></script>
@endsection

@section('content')

    <div class="row">


        <!-- Draggable Marker With Popup -->
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header">Potensi Smart Community</h5>
                <div class="card-body">
                    <div class="leaflet-map" id="map"></div>
                </div>
            </div>
        </div>




        <hr class="my-1">


        <!-- Responsive Datatable -->
        <div class="card">
            <h5 class="card-header"></h5>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>
                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">No</th>
                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">Desa</th>
                            <!--  Sementara <th rowspan="2" style="text-align:center; vertical-align:middle; ">Kategori</th>-->
                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">Indeks Smart Community
                            </th>
                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">Potensi Smart Community
                            </th>
                            <th colspan="10" style="text-align:center; vertical-align:middle; ">Skor Variable</th>

                        </tr>
                        <tr>

                            <th style="text-align:center; vertical-align:middle; ">Fasilitas Umum</th>
                            <th style="text-align:center; vertical-align:middle; ">UMKM</th>
                            <th style="text-align:center; vertical-align:middle; ">Medis</th>
                            <th style="text-align:center; vertical-align:middle; ">Keamanan Publik</th>
                            <th style="text-align:center; vertical-align:middle; ">Pembangunan Ekonomi</th>
                            <th style="text-align:center; vertical-align:middle; ">Penataan Kawasan</th>
                            <th style="text-align:center; vertical-align:middle; ">Pengembangan Masyarakat</th>
                            <th style="text-align:center; vertical-align:middle; ">Transportasi</th>
                            <th style="text-align:center; vertical-align:middle; ">Bank</th>
                            <th style="text-align:center; vertical-align:middle; ">Internet</th>


                        </tr>
                    </thead>
                    <tbody> @php $i=1 @endphp
                        @foreach ($desa as $ds)
                            <tr>

                                <td style="text-align:center; vertical-align:middle; ">{{ $i++ }}</td>

                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->nama_desa }}</td>

                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->indeks }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->potensi }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->fasilitas }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->umkm }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->medis }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->keamanan }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->pembangunan }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->penataan }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->pengembangan }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->transportasi }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->bank }}</td>
                                <td style="text-align:center; vertical-align:middle; ">{{ $ds->internet }}</td>


                            </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
        </div>
        <!--/ Responsive Datatable -->



    </div>
    <!-- End: Content-->

    <script type="module">
        var map = L.map('map').setView([-6.2777832, 106.8026676], 10);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map)




        let kemangGeojson = await fetch("{{ asset('geojson/ADM.geojson') }}");
        console.log(kemangGeojson);
        const geojsonBody = await kemangGeojson.json();
        let geolayer = L.geoJson(geojsonBody, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map);
        map.fitBounds(geolayer.getBounds())

      function popUp(feature, layer) {
            let html = "";
            if (feature.properties) {
                html += '<b>'+'<p>' + feature.properties['NAMOBJ'] + '</b>'+ '</p>';
                html += '<p>' + '&nbsp;Nilai Indeks: '+ feature.properties['indeks_sc'] + '</p>';
                html += '<p>' + '&nbsp;Kategori Indeks: '+ feature.properties['smart_comm'] + '</p>';
                layer.bindPopup(html);
            }
        }

        // Set Warna Berdasarkan Value Kepadatan Penduduk Field INDEKS


        function style(feature) {
            return {
                weight: 3,
                opacity: 1,
                color: 'black',
                dashArray: '3',
                fillOpacity: 1,
                fillColor: feature.properties.Warna
            };
        }

        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#fff',
                dashArray: '',
                fillOpacity: 0.7
            });

            if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                layer.bringToFront();
            }

            info.update(layer.feature.properties);
        }

        function resetHighlight(e) {
            geolayer.resetStyle(e.target);
            info.update();
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });


            popUp(feature, layer);

            var label = L.marker(layer.getBounds().getCenter(), {
                icon: L.divIcon({
                    className: 'label',
                    html: feature.properties.NAMOBJ,

                    iconSize: [80, 10]
                })
            }).addTo(map);
        }



      var controlLayers = L.control.layers().addTo(map);



//var url2 = ("{{ asset('geojson/Sungai_LN.json') }}");
///$.getJSON(url2, function (geojson) {
  //var geojsonLayer = L.geoJson(geojson, {
    //style: function (feature) {
      //return {
        //'weight': 1,
        //'fillOpacity': 0
      //}
    //}
  //}).addTo(map);
  //controlLayers.addOverlay(geojsonLayer, 'SUNGAI');
//});

//
var url3 = "{{ asset('geojson/UMKM.geojson') }}";

        $.getJSON(url3, function (geojson) {
            var geojsonLayer = L.geoJson(geojson, {
                style: function (feature) {
                    return {
                        'weight': 1,
                        'fillOpacity': 0
                    }
                },
                onEachFeature: function (feature, layer) {
                    if (feature.properties) {
                        layer.bindPopup(getPopupContent(feature.properties));
                    }
                }
            }).addTo(map);
            controlLayers.addOverlay(geojsonLayer, 'UMKM');
        });

        function getPopupContent(properties) {
            var popupContent = "<b>Nama:</b> " + properties.NAMA_UMKM + "<br>";
            popupContent += "<b>Alamat:</b> " + properties.ALAMAT + "<br>";
                popupContent += "<b>Desa:</b> " + properties.KELURAHAN + "<br>";
            // Add more properties as needed
            return popupContent;
        }

//var url4 = ("{{ asset('geojson/Jarak_Sumber_Irigasi.json') }}");
//$.getJSON(url4, function (geojson) {
  //var geojsonLayer = L.geoJson(geojson, {
    //style: function (feature) {
      //return {
        //'weight': 1,
        //'fillOpacity': 0
      //}
    //}
  //}).addTo(map);
  //controlLayers.addOverlay(geojsonLayer, 'Irigasi');
//});


var url5 = ("{{ asset('geojson/UMKM.json') }}");
$.getJSON(url5, function (geojson) {
  var geojsonLayer = L.geoJson(geojson, {
    style: function (feature) {
      return {
      'weight': 1,
        'fillOpacity': 0
      }
    }
  }).addTo(map);
  controlLayers.addOverlay(geojsonLayer, 'UMKM');
});

var legend_div = new L.Control({position: 'bottomright'});
				legend_div.onAdd = function (map) {
				  this._div = L.DomUtil.create('div', 'info legend');
				  this._div.innerHTML = '<div id="legend-title">Potensi Smart Community</div>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#b7fbb8;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Cukup Potensial<br>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#ffeabd;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Potensial<br>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#feff73;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Sangat Potensial<br>';
				  return this._div;
				};
				legend_div.addTo(map);
                var editor; // use a global for the submit and return data rendering in the examples


 $(document).ready(function() {
     editor = new $.fn.dataTable.Editor( {
         ajax: {
            url: "{{ asset('geojson/UMKM.geojson') }}",
            data: function ( d ) {

         d.format="geojson";
       },

       dataSrc: 'features'
       },
         table: '#example',
         idSrc:  'id'
     } );


     $('#example').DataTable( {

        ajax: {
            url: "{{ asset('geojson/ADM.geojson') }}",
            type: 'GET',
        data: function ( d ) {

         d.format="geojson";

       },

       dataSrc: 'features'
        },
       dom: 'Bfrtip',

         columns: [
       {data: "properties.FID_1" },
       { data: "properties.NAMOBJ" },
       { data: "properties.indeks_sc" },
       { data: "properties.smart_comm" },
       { data: "properties.pasar" },
       { data: "properties.jalan" },
       { data: "properties.Sekolah" },
       { data: "properties.bank" },
       { data: "properties.koperasi" },
       { data: "properties.komunitas" },
       { data: "properties.UMKM" },
       { data: "properties.medis" },
       { data: "properties.keamanan" }



         ],
        select: {
             style:    'os',
             selector: 'td:first-child'
         },

         buttons: [

             { extend: "edit",   editor: editor },
             { extend: "remove", editor: editor }
         ]
     } );
 } );





    </script>
@endsection
