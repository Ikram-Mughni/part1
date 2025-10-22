<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- judul web -->
    <title>Ikram Landing Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <!-- navbar -->
      <nav class="navbar">
        <h1>🥷 Ikram Personal Website</h1>
        <button id="theme-toggle">🌙 Dark Mode</button>
      </nav>
    </header>

    <!-- intro -->
    <main>
      <section class="intro">
        <h2>Hello, I'm <span class="highlight">Muhammad Ikram Mughni</span> 👋</h2>
        <p>
          I'm a <strong>Junior Web Developer</strong> who loves coding and
          teaching!
        </p>
        <button id="greet-btn">Say Hello 👋</button>
      </section>

      <!-- about -->
      <section class="about">
        <h3>✨ About Me</h3>
        <p>
          I enjoy creating websites, solving problems, and sharing what I learn.
          This is my first interactive page using <strong>HTML</strong>,
          <strong>CSS</strong>, and <strong>JavaScript</strong>!
        </p>
      </section>

      <!-- section random -->
      <section class="fun-fact">
        <h3>🎬 Fun Fact Section</h3>
        <button id="fact-btn">Show Random Fun Fact 🤓</button>
        <p id="fact-display"></p>
      </section>
    </main>

    <!-- Video Section -->
    <section class="videos-section">
      <h2>🎬 My Favorite Videos</h2>

      <div class="videos">
        <div class="video-card">
          <iframe
            src="https://www.youtube.com/embed/7NOSDKb0HlU"
            title="Lo-fi for Coding"
            allowfullscreen
          ></iframe>
          <h3>Lo-fi for Coding</h3>
          <p>Chill lofi beats to stay productive ☕</p>
        </div>

        <div class="video-card">
          <iframe
            src="https://www.youtube.com/embed/f02mOEt11OQ"
            title="Relaxing Focus Music"
            allowfullscreen
          ></iframe>
          <h3>Relaxing Focus Music</h3>
          <p>Perfect ambient background for deep work 🌙</p>
        </div>

        <div class="video-card">
          <iframe
            src="https://www.youtube.com/embed/5qap5aO4i9A"
            title="Lofi Girl Live"
            allowfullscreen
          ></iframe>
          <h3>Lofi Girl Live</h3>
          <p>24/7 chill beats to code, study, and relax 🎧</p>
        </div>
      </div>
    </section>

    <!-- End of Video Section -->

    <!-- Footer -->
    <footer>
      <p>Made with by Ikram | 2025</p>
    </footer>
    <!-- End Footer -->

    <script src="script.js"></script>
  </body>
</html>