<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik Sehat Online - Berobat Mudah dari Rumah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1584982751601-97dcc096659c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 30px;
            font-size: 1.1rem;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .features-section {
            padding: 60px 0;
            background-color: #fff;
        }
        .feature-card {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .testimonials-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .testimonial-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .contact-section {
            padding: 60px 0;
            background-color: #fff;
        }
        .contact-section .form-control {
            margin-bottom: 15px;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            .hero-section p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Poliklinik Sehat Online</h1>
            <p>Berobat Mudah dari Rumah dengan Konsultasi Dokter Online</p>
            <a href="#contact" class="btn btn-primary">Buat Janji Sekarang</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="text-center mb-5">Mengapa Memilih Kami?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-video fa-3x mb-3 text-primary"></i>
                        <h4>Konsultasi Online</h4>
                        <p>Bertemu dokter profesional melalui video call dari kenyamanan rumah Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-calendar-check fa-3x mb-3 text-primary"></i>
                        <h4>Jadwal Fleksibel</h4>
                        <p>Pilih waktu konsultasi yang sesuai dengan jadwal Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-prescription fa-3x mb-3 text-primary"></i>
                        <h4>Resep Digital</h4>
                        <p>Dapatkan resep obat digital yang dikirim langsung ke ponsel Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Pasien Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Konsultasi online sangat membantu! Dokternya ramah dan prosesnya cepat."</p>
                        <h5>- Ani, 34 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Saya bisa buat janji kapan saja, sangat praktis untuk ibu bekerja seperti saya."</p>
                        <h5>- Budi, 40 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Resep digital langsung dikirim ke apotek, sangat efisien!"</p>
                        <h5>- Citra, 28 tahun</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="text-center mb-5">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="/submit" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Pesan atau Pertanyaan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Poliklinik Sehat Online. Semua hak dilindungi.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>