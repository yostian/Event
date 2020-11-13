$.ajax({
    url: "home/speakers_detail",
    type: "GET",
    datatype: "JSON",
    success: function(e){
        var a = JSON.parse(e);
        for (var i = 0; i < a.length; i++) {
            var c = a[i];
            var nama = a[0].image;
            var x = `
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker-details" id="${c.id_speakers}">
                            <img src="assets/img/speakers/${c.image}" value="${c.id_speakers}" style="width:100%;cursor:pointer" onclick="onClick(this)" class="img-fluid">
                                <div class="details">
                                    <h3>${c.nama_speakers}</a></h3>
                                    <p>Quas alias incidunt</p>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>`
            document.getElementById('speakers_list').innerHTML = document.getElementById('speakers_list').innerHTML + x;
        }
    }
});

function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var g = element.getAttribute('value');
    $.ajax({
        url: "home/get_speaker_details/"+g,
        success: function(result){
            var a = JSON.parse(result);
            var b = `
                    <div class="top-content">
                        <div class="main-title custom-bar">Speakers Detail</div>
                            <div class="name" id="nama">${a[0].nama_speakers}</div>
                        </div>
                        <div class="detail-speakers custom-bar">${a[0].detail_speakers}
                    </div>`
            document.getElementById('speaker_details').innerHTML =  b;
        }
  });
}

$.ajax({
    url: "home/partnership",
    type: "GET",
    success: function(e){
        var a = JSON.parse(e);
        for (var i = 0; i < a.length; i++) {
            var c = a[i];
            var nama = a[0].image;
            var x = `
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="sponsor-logo">
                            <img src="assets/img/sponsors/${c.image_partnership}" class="img-fluid" alt="">
                        </div>
                    </div>`
            document.getElementById('sponsor_list').innerHTML = document.getElementById('sponsor_list').innerHTML + x;
        }
    }        
});