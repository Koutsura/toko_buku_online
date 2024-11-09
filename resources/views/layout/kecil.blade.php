<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <style>
        .kecil-container {
          overflow: hidden;
          width: 100%;
          height: auto;
        }

        .kecil {
          display: flex;
          gap: 1rem;
          animation: infinite-scroll 10s linear infinite;
          align-items: center;

        }

        .kecil img {
          width: 100px;
          height: auto;
        }

        @keyframes infinite-scroll {
            from {
              transform: translateX(100vw);  /* Mulai di luar viewport (kanan) */
            }
            to {
              transform: translateX(-100%);  /* Berhenti di luar viewport (kiri) */
            }
          }
        </style>
</head>
<body>
    <div class="kecil-container">
        <div id="kecil" class="kecil">
          <img src="https://skolla.online/wp-content/uploads/2023/11/logo-kampus-merdeka-1024x393.png" alt="Kampus Merdeka"/>
          <img src="https://storage.googleapis.com/danacita-website-v3-prd/website_v3/images/rakamin-blogbanner-update-v2-2022-oct-21.original.png" alt="Rakamin Academy"/>
          <img src="{{ asset('images/DecaDev.png') }}" alt="Decadev"/>
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Udemy_logo.svg/640px-Udemy_logo.svg.png" alt="Udemy"/>
          <img src="https://osccdn.medcom.id/images/content/2022/12/26/3b8ba6c76ee89a504d183fc531ed76f8.png" alt="MSIB"/>
        </div>
      </div>
</body>
</html>
