<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="vendor/style.css">

  <?php
  include "bootstrap.php"
  ?>
</head>

<body>



  <!-- ***** Header Area Start ***** -->
  <?php
  include "header.php"
  ?>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Discover Our Weekly Offers</h4>
          <h2>Amazing Prices &amp; More</h2>
          <div class="border-button"><a href="about">Discover More</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="search-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <form id="search-form">
            <div class="row">

              <div class="col-lg-8">
                <fieldset>
                  <input
                    type="text"
                    id="searchInput"
                    class="form-control"
                    placeholder="Search Zanzibar tours...">
                </fieldset>
              </div>

              <div class="col-lg-2">
                <fieldset>
                  <button type="submit" class="border-button w-100">
                    Search
                  </button>
                </fieldset>
              </div>

              <div class="col-lg-2">
                <fieldset>
                  <button
                    type="button"
                    id="clearSearch"
                    class="border-button w-100">
                    Clear
                  </button>
                </fieldset>
              </div>

            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <div class="amazing-deals">
    <div class="container">

      <div class="row">

        <!-- Section Heading -->
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Zanzibar Tours & Experiences</h2>
            <p>
              Discover the best tours, activities and experiences in Zanzibar.
            </p>
          </div>
        </div>

        <!-- Tours will be displayed here -->
        <div id="tour-list" class="row"></div>

        <!-- Pagination -->
        <div class="col-lg-12">
          <div class="tour-pagination">

            <button id="prevBtn" type="button" class="tour-nav-btn previous">
              <i class="fa fa-arrow-left"></i>
              <span>Previous Tours</span>
            </button>

            <div class="tour-page-info">
              <span id="pageNumber">1 / 1</span>
            </div>

            <button id="nextBtn" type="button" class="tour-nav-btn next">
              <span>Next Tours</span>
              <i class="fa fa-arrow-right"></i>
            </button>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Are You Looking To Travel ?</h2>
          <h4>Make A Reservation By Clicking The Button</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="reservation">Book Yours Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include "footer.php"
  ?>

  <?php
  include "search.php"
  ?>
</body>

</html>