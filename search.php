<script>
  const tours = [

    {
      name: "Stone Town City Tour",
      page: "stone-town",
      // location: "Stone Town, Zanzibar",
      // duration: "3 - 4 Hours",
      description: "Discover the rich history and culture of Stone Town as you explore its narrow streets, historic buildings, local markets, ancient architecture and famous landmarks.",
      image: "assets/images/deals-01.jpg"
    },

    {
      name: "Prison Island Tour",
      page: "prison-island",
      // location: "Prison Island, Zanzibar",
      // duration: "Half Day",
      description: "Escape to Prison Island and discover its fascinating history, beautiful beaches and giant Aldabra tortoises while enjoying swimming and snorkeling in the crystal-clear waters.",
      image: "assets/images/deals-02.jpg"
    },

    {
      name: "Nakupenda Sandbank Tour",
      page: "nakupenda",
      // location: "Nakupenda Sandbank, Zanzibar",
      // duration: "Full Day",
      description: "Spend an unforgettable day at Nakupenda Sandbank with crystal-clear turquoise waters, swimming, snorkeling, sunbathing and a delicious freshly prepared seafood lunch.",
      image: "assets/images/deals-03.jpg"
    },

    {
      name: "Safari Blue Tour",
      page: "safari-blue",
      // location: "Fumba, Zanzibar",
      // duration: "Full Day",
      description: "Experience the legendary Safari Blue adventure with traditional dhow sailing, beautiful sandbanks, snorkeling, swimming and a delicious seafood feast surrounded by the Indian Ocean.",
      image: "assets/images/deals-04.jpg"
    },

    {
      name: "Mnemba Island Snorkeling",
      page: "mnemba",
      // location: "Mnemba Island, Zanzibar",
      // duration: "Half Day",
      description: "Explore the spectacular waters around Mnemba Island and discover colorful coral reefs, tropical fish and an incredible underwater world perfect for snorkeling.",
      image: "assets/images/deals-01.jpg"
    },

    {
      name: "Dolphin Tour",
      page: "dolphin",
      // location: "Kizimkazi, Zanzibar",
      // duration: "Half Day",
      description: "Head to Kizimkazi for an exciting marine adventure where you can search for dolphins, enjoy the beautiful coastline and experience the warm waters of the Indian Ocean.",
      image: "assets/images/deals-02.jpg"
    },

    {
      name: "Jozani Forest Tour",
      page: "jozani-forest",
      // location: "Jozani, Zanzibar",
      // duration: "Half Day",
      description: "Walk through the beautiful Jozani Forest and discover Zanzibar's unique wildlife, including the famous red colobus monkeys, while exploring the island's natural ecosystem.",
      image: "assets/images/deals-03.jpg"
    },

    {
      name: "Spice Farm Tour",
      page: "spice-farm",
      // location: "Kizimbani, Zanzibar",
      // duration: "Half Day",
      description: "Experience the scents and flavors of Zanzibar on a spice farm tour where you can discover cloves, cinnamon, vanilla, cardamom and other spices while learning about local farming traditions.",
      image: "assets/images/deals-04.jpg"
    },

    {
      name: "The Rock Restaurant Tour",
      page: "the-rock",
      // location: "Michamvi, Zanzibar",
      // duration: "Half Day",
      description: "Visit the iconic Rock Restaurant in Michamvi and enjoy breathtaking ocean views, beautiful coastal scenery and a unique dining experience surrounded by the Indian Ocean.",
      image: "assets/images/deals-01.jpg"
    },

    {
      name: "Kuza Cave Tour",
      page: "kuza-cave",
      // location: "Jambiani, Zanzibar",
      // duration: "Half Day",
      description: "Discover the fascinating Kuza Cave near Jambiani, explore its natural limestone surroundings and enjoy the peaceful atmosphere of one of Zanzibar's hidden treasures.",
      image: "assets/images/deals-02.jpg"
    },

    {
      name: "Nungwi & Kendwa Beach Tour",
      page: "nungwi-kendwa",
      // location: "Nungwi & Kendwa, Zanzibar",
      // duration: "Full Day",
      description: "Explore the stunning northern beaches of Zanzibar, relax on the white sands of Nungwi and Kendwa, swim in turquoise waters and enjoy the vibrant coastal atmosphere.",
      image: "assets/images/deals-03.jpg"
    },

    {
      name: "Mangrove Forest Tour",
      page: "mangrove-forest",
      // location: "Zanzibar",
      // duration: "Half Day",
      description: "Explore Zanzibar's peaceful mangrove forests and discover a unique coastal ecosystem while learning about mangrove conservation, marine life and the importance of these natural habitats.",
      image: "assets/images/deals-04.jpg"
    },

    {
      name: "Turtle Conservation Tour",
      page: "turtle-conservation",
      // location: "Zanzibar",
      // duration: "Half Day",
      description: "Learn about Zanzibar's sea turtle conservation efforts and discover how these amazing marine animals are protected while gaining a deeper appreciation for the island's marine environment.",
      image: "assets/images/deals-04.jpg"
    },

    {
      name: "Chumbe Island Tour",
      page: "chumbe-island",
      // location: "Chumbe Island, Zanzibar",
      // duration: "Full Day",
      description: "Discover the protected paradise of Chumbe Island with its beautiful coral reefs, tropical marine life, pristine beaches and fascinating conservation environment.",
      image: "assets/images/deals-04.jpg"
    },

    {
      name: "Freddie Mercury Tour",
      page: "freddie-mercury",
      // location: "Stone Town, Zanzibar",
      // duration: "2 - 3 Hours",
      description: "Follow the story of Freddie Mercury in Stone Town and discover the places connected to the legendary Queen singer's early life, Zanzibar heritage and musical journey.",
      image: "assets/images/deals-04.jpg"
    },

    {
      name: "Darajani Market Tour",
      page: "darajani-market",
      // location: "Stone Town, Zanzibar",
      // duration: "2 - 3 Hours",
      description: "Experience the lively atmosphere of Darajani Market, explore local food and spices, meet local traders and discover the authentic flavors and everyday life of Zanzibar.",
      image: "assets/images/deals-04.jpg"
    },

    {
      name: "Village & Culture Tour",
      page: "culture-village",
      // location: "Zanzibar Villages",
      // duration: "Half Day",
      description: "Experience authentic Zanzibar village life, meet local communities and discover traditional culture, local crafts, food, farming and the everyday lifestyle of the island's people.",
      image: "assets/images/deals-04.jpg"
    },

    {
      name: "Salaam Cave Tour",
      page: "salaam-cave",
      // location: "Zanzibar",
      // duration: "Half Day",
      description: "Discover the natural beauty and peaceful atmosphere of Salaam Cave, explore its fascinating surroundings and experience another hidden side of Zanzibar away from the busy tourist routes.",
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

  <h4>${tour.name}</h4>

  <p>${tour.description}</p>

  <div class="tour-buttons">
    <a href="${tour.page}" class="details-btn">
      View Tour
      <i class="fa fa-arrow-right"></i>
    </a>
  </div>

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

  document.getElementById("nextBtn").addEventListener("click", function() {

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

  document.getElementById("prevBtn").addEventListener("click", function() {

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
    function(event) {

      event.preventDefault();

      const searchValue =
        document
        .getElementById("searchInput")
        .value
        .toLowerCase()
        .trim();


      filteredTours = tours.filter(tour =>

        tour.name.toLowerCase().includes(searchValue) ||


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
    function() {

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