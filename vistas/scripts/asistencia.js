// Crea una nueva instancia con las configuraciones especificadas
var scanner = new Instascan.Scanner({
    continuous: true, // Escaneo continuo
    video: document.getElementById('preview'), // Elemento de video para mostrar la vista previa del escaneo
    mirror: false, // No se refleja la imagen en el escaner
    captureImage: false, // No se captura la imagen
    backgroundScan: false, // No se escanea en segundo plano
    refractoryPeriod: 5000, // Periodo refractario de 5 segundos
    scanPeriod: 5 // Periodo de escaneo de 1 milisegundo
});

// Agrega un listener 'scan' al escaner que se activa cuando se escanea un codigo
scanner.addListener('scan', function (content) {
    // Envia una solicitud post al script PHP para registrar la asistencia con el codigo escaneado
    $.post('../controlador/Asistencia.php?op=registrar', { "codigo": content }, function(data) {
        // Muestra una notificacion de exito utilizando la biblioteca SweetAlert
        Swal.fire({
            title: "Asistencia",
            text: data,
            icon: "success"
        });
    });
});

// Función para iniciar la cámara y comenzar a escanear códigos QR
function iniciaCamara() {
    // Obtiene las cámaras disponibles y comienza a escanear utilizando la última cámara encontrada
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[cameras.length - 1]);
        } else {
            alert('No se encontró una cámara disponible');
            console.error('No se encontró una cámara disponible.');
        }
    }).catch(function (e) {
        console.error(e);
    });
}

// Función para detener el escaneo y apagar la cámara
function apagarCamara() {
    scanner.stop();
}

