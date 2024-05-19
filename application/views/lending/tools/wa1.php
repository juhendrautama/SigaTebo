<style>
.containerChat {
    display: flex;
    align-items: center;
    border-radius: 10px;
}

.logo {
    width: 50%;
    height: auto;
    margin-right: 10px;
}

.text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    color: white;

}

.text font:first-child {
    margin-bottom: -4px;
    font-weight: bold;
    /* Sesuaikan jarak sesuai keinginan Anda */
}
</style>
<div style="padding:25px;  margin-right:10px; margin-bottom:-10px;" class="position-fixed bottom-0 end-0 z-3 ">
    <div class="dropup dropup">

        <div class="btn btn-success opacity-15 shadow" data-bs-toggle="dropdown" aria-expanded="false"
            data-bs-auto-close="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                <path fill="currentColor" fill-rule="evenodd"
                    d="M414.73 97.1A222.14 222.14 0 0 0 256.94 32C134 32 33.92 131.58 33.87 254a220.61 220.61 0 0 0 29.78 111L32 480l118.25-30.87a223.63 223.63 0 0 0 106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 0 0 414.73 97.1M256.94 438.66h-.08a185.75 185.75 0 0 1-94.36-25.72l-6.77-4l-70.17 18.32l18.73-68.09l-4.41-7A183.46 183.46 0 0 1 71.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 0 1 185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52m101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78s-14.4 18-17.65 21.75s-6.5 4.16-12.07 1.38s-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26s.93-6.94-.46-9.71s-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52c-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 0 0-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38s39.3 59.73 95.21 83.76a323.11 323.11 0 0 0 31.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2c10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37s-5.11-3.71-10.69-6.48" />
            </svg>
            Butuh Bantuan ?
        </div>

        <div class="dropdown-menu"
            style="width: 250%; height:310px;  padding:5px; border-radius:15px; transition: 0.3s;">
            <div style="background-color: #095e54; padding:13px ">
                <div class="containerChat container">
                    <img src="img/LOGO/INDONESIA_logo.png" style=" width:15%;" class="logo rounded-5  img-thumbnail">
                    <div class="text">
                        Komisi Informasi Provinsi Jambi
                    </div>
                </div>
            </div>
            <div style="background-image: url('img/bg/wa.jpg'); height:60%;  padding:8px;">
                <p style="background-color: white; padding:10px; border-radius:10px;">
                    #BukaInformasiPublik #HakAndaUntukTahu
                </p>
            </div>
            <div style="padding-top:3px;">
                <div class="input-group">
                    <input type="text" class="form-control" id="chat">
                    <a class="btn btn-success" onclick="pillihPaket()" href="#">Sand</a>
                </div>

            </div>
        </div>

        <script src="tmpDepan/bootstrap5/js/jquery-3.6.0.min.js"></script>
        <script>
        function pillihPaket(id) {
            let a = $('#chat').val();
            if ("" != a.value) {
                var b = $("#get-number").text(),
                    c = document.getElementById("chat").value,
                    d = "https://api.whatsapp.com/send",
                    e = b,
                    f = "&text=" + c;
                if (
                    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                        navigator.userAgent
                    )
                )
                    var d = "whatsapp://send";
                var g = d + "?phone=+62082177905852" + e + f;
                window.open(g, "_blank");
            }

        }
        // $("#").click(function() {
        //     var a = document.getElementById("chat-input");



        // });
        </script>