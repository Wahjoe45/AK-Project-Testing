<!-- {{-- gambar --}} -->
<section class="d-flex align-items-center pb-1" data-aos="fade-up" >
    <div class="container p-5 " style="background-image: url(assets/img/faqs.png); background-position: center; border-radius: 30px; background-size: cover;" >
        <div class="row justify-content-center gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column ">
                <h1 data-aos="fade-up" class="text-left" style="color: aliceblue;"><strong>Frequently</strong></h1>
                <h1 data-aos="fade-up" class="text-center" style="color: aliceblue;"><strong>Asked</strong></h1>
                <h1 data-aos="fade-up" class="text-right" style="color: aliceblue;"><strong>Question</strong></h1>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                </div>
            </div>

            
        </div>
    </div>
</section>
<!-- {{-- main --}} -->



<div class="container mb-5 mt-5" data-aos="fade-up">
    <div class="row">
        <center><h2 data-aos="fade-up" class="text-center mb-3" style="color: rgb(0, 0, 0);"><strong>FAQ</strong></h2>
        <!-- Bagian search bar -->
<div class="col-md-8">
  <div class="input-group mb-3">
      <input type="text" class="form-control input-text" placeholder="Apa yang bisa kami bantu?" style="background-color: #f2f2f2;">
      <div class="input-group-append">
          <button class="btn btn-lg text-light" style="background-color: #F26419" onclick="searchContent()"><i class="fa fa-search"></i></button>
      </div>
  </div>
</div>

<!-- Bagian konten yang akan dicari -->
<div class="container mt-3"> 
  <div class="row">
      <!-- Konten lainnya -->
  </div>
</div>
<style>
  /* Ganti nilai margin-bottom sesuai dengan jarak yang Anda inginkan */
  .accordion-item {
      margin-bottom: 20px; /* Contoh: memberikan jarak 10px antara elemen accordion */
  }
  
  /* Ganti nilai margin-bottom sesuai dengan jarak yang Anda inginkan */
  .accordion-button {
      margin-bottom: 5px; /* Contoh: memberikan jarak 5px antara judul pertanyaan */
  }
  
  /* Ganti nilai margin-bottom sesuai dengan jarak yang Anda inginkan */
  .accordion-body {
      margin-bottom: 5px; /* Contoh: memberikan jarak 5px antara jawaban dan judul pertanyaan */
  }
  </style>
  

<script>
  function searchContent() {
      const searchText = document.querySelector('.input-text').value;
      const accordionItems = document.querySelectorAll('.container .accordion-item');
  
      accordionItems.forEach(item => {
          const questionElement = item.querySelector('.accordion-button');
          const answerElement = item.querySelector('.accordion-collapse');
  
          const questionText = questionElement.textContent;
          const answerText = answerElement.textContent;
  
          const regex = new RegExp(searchText, 'gi');
  
          // Menyorot kata-kata cocok dalam pertanyaan
          const highlightedQuestion = questionText.replace(regex, '<span style="background-color: orange;">$&</span>');
          questionElement.innerHTML = highlightedQuestion;
  
          // Menyorot kata-kata cocok dalam jawaban
          const highlightedAnswer = answerText.replace(regex, '<span style="background-color: orange;">$&</span>');
          answerElement.innerHTML = highlightedAnswer;
  
           // Tentukan apakah elemen accordion harus ditampilkan atau disembunyikan berdasarkan hasil pencarian
        if (searchText === "") {
            // Jika search bar kosong, lakukan refresh halaman
            item.style.display = "block";
            window.location.reload();
        } else if (questionText.match(regex) || answerText.match(regex)) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}

// Event listener untuk input search bar
document.querySelector('.input-text').addEventListener('keypress', function(event) {
    if (event.key === "Enter") {
        event.preventDefault(); // Mencegah default action saat menekan "Enter" (misalnya form submission)
        searchContent(); // Memanggil fungsi pencarian
    }
  });
</script>

        </center>        
    </div>
</div>


{{-- pertanyaan dan jawaban --}}

<div class="container mt-3"> 
    <div class="row">
<div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            Bagaimana cara menambahkan kandidat ?
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
        <div class="accordion-body">
          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            Apa itu kandidat Area Kerja ?
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
        <div class="accordion-body">
          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            Bagaimana cara melamar kerja lewat Areakerja.com ?
        </button>
      </h2>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
        <div class="accordion-body">
          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
          Bagaimana cara mengganti kata sandi ?
        </button>
      </h2>
      <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
        <div class="accordion-body">
          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

    <img src="assets2/gif/loading-footer.gif" class="gif-loading">