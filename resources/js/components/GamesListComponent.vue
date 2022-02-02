<template>
  <section class="games d-flex flex-wrap">
    <div class="container">
      <div class="row g-5 justify-content-center">
        <div v-for="game in games" :key="game.name">
          <div class="col-3">
            <div class="card my-2" style="width: 18rem">
              <img :src="game.cover" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">{{ game.name }}</h5>
                <p class="card-text">{{ game.description }}</p>
                <a href="#" class="btn btn-primary"
                  >buy for {{ game.price }}$</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      loading: true,
      games: null,
      meta: null,
      links: null,
    };
  },
  mounted() {
    axios.get("api/games").then((response) => {
      console.log(response);
      this.games = response.data.data;
      this.meta = response.data.meta;
      this.links = response.data.links;
      this.loading = false;
    });
    console.log("Component mounted.");
  },
};
</script>
