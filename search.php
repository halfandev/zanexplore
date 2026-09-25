<script>

const tours = [

    {
        name: "Stone Town City Tour",
        page: "stone-town",
        location: "Stone Town",
        duration: "3 - 4 Hours",
        description: "Explore the historical streets, markets and famous landmarks of Stone Town.",
        image: "assets/images/deals-01.jpg"
    },

    {
        name: "Prison Island Tour",
        page: "prison-island",
        location: "Prison Island",
        duration: "Half Day",
        description: "Visit Prison Island and see the famous giant Aldabra tortoises.",
        image: "assets/images/deals-02.jpg"
    },

    {
        name: "Nakupenda Sandbank Tour",
        page: "nakupenda",
        location: "Nakupenda",
        duration: "Full Day",
        description: "Enjoy crystal-clear water, swimming, snorkeling and a delicious seafood lunch.",
        image: "assets/images/deals-03.jpg"
    },

    {
        name: "Safari Blue Tour",
        page: "safari-blue",
        location: "Fumba",
        duration: "Full Day",
        description: "Experience sailing, snorkeling, sandbanks and seafood on the famous Safari Blue tour.",
        image: "assets/images/deals-04.jpg"
    },

    {
        name: "Mnemba Island Snorkeling",
        page: "mnemba",
        location: "Mnemba Island",
        duration: "Half Day",
        description: "Discover beautiful coral reefs and enjoy snorkeling around Mnemba Island.",
        image: "assets/images/deals-01.jpg"
    },

    {
        name: "Dolphin Tour",
        page: "dolphin",
        location: "Kizimkazi",
        duration: "Half Day",
        description: "Visit Kizimkazi and experience a memorable dolphin tour.",
        image: "assets/images/deals-02.jpg"
    },

    {
        name: "Jozani Forest Tour",
        page: "jozani-forest",
        location: "Jozani",
        duration: "Half Day",
        description: "Explore Jozani Forest and discover Zanzibar's famous red colobus monkeys.",
        image: "assets/images/deals-03.jpg"
    },

    {
        name: "Spice Farm Tour",
        page: "spice-farm",
        location: "Kizimbani",
        duration: "Half Day",
        description: "Discover Zanzibar's spices and learn about the island's spice farming traditions.",
        image: "assets/images/deals-04.jpg"
    },

    {
        name: "The Rock Restaurant Tour",
        page: "the-rock",
        location: "Michamvi",
        duration: "Half Day",
        description: "Visit the iconic Rock Restaurant and enjoy the beautiful Michamvi coastline.",
        image: "assets/images/deals-01.jpg"
    },

    {
        name: "Kuza Cave Tour",
        page: "kuza-cave",
        location: "Jambiani",
        duration: "Half Day",
        description: "Explore the beautiful Kuza Cave and enjoy the natural surroundings of Jambiani.",
        image: "assets/images/deals-02.jpg"
    },

    {
        name: "Nungwi & Kendwa Tour",
        page: "nungwi-kendwa",
        location: "Nungwi",
        duration: "Full Day",
        description: "Discover the beautiful beaches of Nungwi and Kendwa in northern Zanzibar.",
        image: "assets/images/deals-03.jpg"
    },

    {
        name: "Mangrove-forest Tour",
        page: "mangrove-forest",
        location: "Kendwa",
        duration: "Full Day",
        description: "Relax and enjoy one of Zanzibar's most beautiful beaches.",
        image: "assets/images/deals-04.jpg"
    },
    {
        name: "turtle conservation Tour",
        page: "turtle-conservation",
        location: "Kendwa",
        duration: "Full Day",
        description: "Relax and enjoy one of Zanzibar's most beautiful beaches.",
        image: "assets/images/deals-04.jpg"
    },
    {
        name: "chumbe island Tour",
        page: "chumbe-island",
        location: "chumbe",
        duration: "Full Day",
        description: "Relax and enjoy one of Zanzibar's most beautiful beaches.",
        image: "assets/images/deals-04.jpg"
    },
    {
        name: "fredie mecury Tour",
        page: "fredie-mecury",
        location: "Fredie-mecury",
        duration: "Full Day",
        description: "Relax and enjoy one of Zanzibar's most beautiful beaches.",
        image: "assets/images/deals-04.jpg"
    },
    {
        name: "darajani-market Tour",
        page: "darajani-market",
        location: "Darajani",
        duration: "Full Day",
        description: "Relax and enjoy one of Zanzibar's most beautiful beaches.",
        image: "assets/images/deals-04.jpg"
    },
    {
        name: "culture-village Tour",
        page: "culture-village",
        location: "Village Tour",
        duration: "Full Day",
        description: "Relax and enjoy one of Zanzibar's most beautiful beaches.",
        image: "assets/images/deals-04.jpg"
    },
    {
        name: "Salaam cave Tour",
        page: "salaam-cave",
        location: "Village Tour",
        duration: "Full Day",
        description: "Relax and enjoy one of Zanzibar's most beautiful beaches.",
        image: "assets/images/deals-04.jpg"
    }
   



];


const toursPerPage = 6;

let currentPage = 1;

let filteredTours = [...tours];


// ===============================
// DISPLAY TOURS
// ===============================

function displayTours() {

  const tourList = document.getElementById("tour-list");

  tourList.innerHTML = "";

  const start = (currentPage - 1) * toursPerPage;

  const end = start + toursPerPage;

  const toursToDisplay = filteredTours.slice(start, end);


  if (toursToDisplay.length === 0) {

    tourList.innerHTML = `
      <div class="col-lg-12 text-center">
        <h4>No tours found.</h4>
        <p>Try searching for another Zanzibar tour.</p>
      </div>
    `;

    updatePagination();

    return;
  }


  toursToDisplay.forEach(tour => {

    tourList.innerHTML += `

      <div class="col-lg-6 col-sm-6 mb-4">

        <div class="item">

          <div class="row">

            <div class="col-lg-6">

              <div class="image">

                <img
                  src="${tour.image}"
                  alt="${tour.name}"
                  class="img-fluid"
                >

              </div>

            </div>


            <div class="col-lg-6 align-self-center">

              <div class="content">

                <span class="info">
                  Zanzibar Tour
                </span>

                <h4>
                  ${tour.name}
                </h4>


                <div class="row">

                  <div class="col-6">

                    <i class="fa fa-clock"></i>

                    <span class="list">
                      ${tour.duration}
                    </span>

                  </div>


                  <div class="col-6">

                    <i class="fa fa-map"></i>

                    <span class="list">
                      ${tour.location}
                    </span>

                  </div>

                </div>


                <p>
                  ${tour.description}
                </p>


                <div class="tour-buttons">

    <a
        href="${tour.page}"
        class="details-btn"
    >
        View Tour
        <i class="fa fa-arrow-right"></i>
    </a>

</div>

              </div>

            </div>

          </div>

        </div>

      </div>

    `;

  });


  updatePagination();

}


// ===============================
// PAGINATION
// ===============================

function updatePagination() {

  const totalPages = Math.ceil(
    filteredTours.length / toursPerPage
  );

  document.getElementById("pageNumber").textContent =
    `${currentPage} / ${totalPages || 1}`;


  document.getElementById("prevBtn").disabled =
    currentPage === 1;


  document.getElementById("nextBtn").disabled =
    currentPage >= totalPages;

}


// ===============================
// NEXT BUTTON
// ===============================

document.getElementById("nextBtn").addEventListener("click", function () {

  const totalPages = Math.ceil(
    filteredTours.length / toursPerPage
  );

  if (currentPage < totalPages) {

    currentPage++;

    displayTours();

    window.scrollTo({
      top: document.querySelector(".amazing-deals").offsetTop - 100,
      behavior: "smooth"
    });

  }

});


// ===============================
// PREVIOUS BUTTON
// ===============================

document.getElementById("prevBtn").addEventListener("click", function () {

  if (currentPage > 1) {

    currentPage--;

    displayTours();

    window.scrollTo({
      top: document.querySelector(".amazing-deals").offsetTop - 100,
      behavior: "smooth"
    });

  }

});


// ===============================
// SEARCH
// ===============================

document.getElementById("search-form").addEventListener(
  "submit",
  function (event) {

    event.preventDefault();

    const searchValue =
      document
        .getElementById("searchInput")
        .value
        .toLowerCase()
        .trim();


    filteredTours = tours.filter(tour =>

      tour.name.toLowerCase().includes(searchValue) ||

      tour.location.toLowerCase().includes(searchValue) ||

      tour.description.toLowerCase().includes(searchValue)

    );


    currentPage = 1;

    displayTours();

  }
);


// ===============================
// CLEAR SEARCH
// ===============================

document.getElementById("clearSearch").addEventListener(
  "click",
  function () {

    document.getElementById("searchInput").value = "";

    filteredTours = [...tours];

    currentPage = 1;

    displayTours();

  }
);


// ===============================
// INITIAL LOAD
// ===============================

displayTours();

</script>