<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Trang Web Thử Nghiệm')</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: Arial, sans-serif; background: #f4f4f4; }
    header { background: #333; color: #fff; padding: 15px; text-align: center; }
    nav { background: #444; padding: 10px; }
    nav ul { list-style: none; display: flex; justify-content: center; }
    nav ul li { margin: 0 15px; }
    nav ul li a { color: #fff; text-decoration: none; }
    main { display: flex; padding: 20px; }
    article { flex: 3; background: #fff; padding: 20px; margin-right: 20px; }
    aside { flex: 1; background: #eaeaea; padding: 20px; }
    footer { background: #333; color: #fff; text-align: center; padding: 10px; margin-top: 20px; }
  </style>
</head>
<body>
  <header>
    <h1>@yield('header', 'Trang Web Thử Nghiệm')</h1>
  </header>

  <nav>
    <ul>
      <li><a href="{{ url('/') }}">Trang chủ</a></li>
      <li><a href="{{ url('/about') }}">Giới thiệu</a></li>
      <li><a href="{{ url('/services') }}">Dịch vụ</a></li>
      <li><a href="{{ url('/contact') }}">Liên hệ</a></li>
    </ul>
  </nav>

  <main>
    <article>
      @yield('content')
    </article>

    <aside>
      @section('sidebar')
        <h3>Sidebar mặc định</h3>
        <p>Sidebar có thể thay đổi ở mỗi trang.</p>
      @show
    </aside>
  </main>

  <footer>
    <p>Bản quyền &copy; 2025 - Trang Web Demo</p>
  </footer>
</body>
</html>
