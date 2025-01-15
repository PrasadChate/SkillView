
    <!-- footer starts -->
    <footer>
      <a href="https://my-port-folio-delta.vercel.app/">
        @Prasad Chate Portfolio</a
      >
    </footer>
    <!-- footer ends -->

    <!-- script for bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- custom script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).scroll(function () {
        $(".navbar").toggleClass(
          "scroll",
          $(this).scrollTop() > $(".navbar").height()
        );
      });
    </script>
  </body>
</html>
