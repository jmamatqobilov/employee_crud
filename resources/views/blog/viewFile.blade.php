@extends('index')
@section('application')

<div class="" style="width: 100%;min-height:120vh;background-color:#fff;margin:10px">
    @php
    $path = asset('storage/files/'.$name);
    @endphp
    <div id="xlsx-viewer" style="padding-top:10px "></div>
    <button id="show-file" style="display: none" onclick="showFile('{{$path}}')"></button>
</div>
@endsection
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
{{-- <script src="https://unpkg.com/docxtemplater"></script> --}}
<script>
    window.onload = function () {
            document.getElementById('show-file').click()
        }
    function showFile(path) {
        var oReq = new XMLHttpRequest();
oReq.open("GET", path, true);
oReq.responseType = "arraybuffer";

oReq.onload = function(e) {
  var arraybuffer = oReq.response;

  /* convert data to binary string */
  var data = new Uint8Array(arraybuffer);
  var arr = new Array();
  for (var i = 0; i !== data.length; ++i) {
    arr[i] = String.fromCharCode(data[i]);
  }

  var workbook = XLSX.read(arr.join(""), { type: "binary" });

  // Get the first sheet in the workbook
  var sheetName = workbook.SheetNames[0];
  var worksheet = workbook.Sheets[sheetName];

  // Convert the worksheet to HTML
  var html = XLSX.utils.sheet_to_html(worksheet);

  var viewerContainer = document.getElementById("xlsx-viewer");
  // Display the HTML in the viewer container
  document.getElementById("xlsx-viewer").innerHTML = '<div class="xlsx-content">' + html + '</div>';
};

oReq.send();
        // reader.readAsArrayBuffer(data)   ;
    //   console.log(path);
    //   fetch(path)
    //     .then(response => response.arrayBuffer())
    //     .then(buffer => {
          
    //       const workbook = XLSX.read(buffer, { type: 'array' });  
    //       console.log(workbook, "aaaa")
    //       // Process the workbook and render it in the desired format
    //     });
    }
    // // Example for rendering Excel file
    
    // // Example for rendering Word file
    // fetch('path/to/word/file.docx')
    //   .then(response => response.arrayBuffer())
    //   .then(buffer => {
    //     const doc = new Docxtemplater().loadZip(buffer);
    //     // Process the document and render it in the desired format
    //   });
</script>

<style>
    .xlsx-content {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    .xlsx-content table {
        border-collapse: collapse;
        width: 100%;
    }

    .xlsx-content th,
    .xlsx-content td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .xlsx-content th {
        background-color: #f2f2f2;
    }
</style>