  </main>

  <footer class="site-footer">
    <div class="container footer-grid">
      <div>
        <strong>John Smith</strong>
        <p>For State Representative</p>
      </div>

      <div class="footer-links">
        <a href="index.php#about">About</a>
        <a href="index.php#priorities">Priorities</a>
        <a href="index.php#contact">Contact</a>
      </div>

      <p class="disclaimer">
        Paid for by John Smith for State Representative.
      </p>
    </div>
  </footer>

  <script>
    const menuToggle = document.querySelector(".menu-toggle");
    const navigation = document.querySelector("#site-navigation");

    if (menuToggle && navigation) {
      menuToggle.addEventListener("click", () => {
        const isOpen =
          menuToggle.getAttribute("aria-expanded") === "true";

        menuToggle.setAttribute("aria-expanded", String(!isOpen));
        navigation.classList.toggle("is-open", !isOpen);
      });

      navigation.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
          menuToggle.setAttribute("aria-expanded", "false");
          navigation.classList.remove("is-open");
        });
      });
    }
  </script>
</body>
</html>
