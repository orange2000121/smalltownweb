<template>
  <nav
    class="navbar navbar-expand-lg navbar-dark"
    style="background-color: #b86b46"
  >
    <!--  Show this only on mobile to medium screens  -->
    <a class="navbar-brand d-lg-none" href="/">
      <img src="assets/logo.png" width="60" height="60" />
    </a>

    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarToggle"
      aria-controls="navbarToggle"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!--  Use flexbox utility classes to change how the child elements are justified  -->
    <div
      class="collapse navbar-collapse justify-content-between"
      id="navbarToggle"
    >
      <ul
        class="navbar-nav navbar-collapse justify-content-center"
        id="navbarNavDropdown"
      >
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <h3 style="color: white">傳統技藝</h3>
          </a>
          <div
            class="dropdown-menu"
            aria-labelledby="navbarDropdown"
            style="background-color: #c22d2d"
          >
            <a class="dropdown-item" href="#">Action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <h3 style="color: white">鹿港住宿</h3>
          </a>
          <div
            class="dropdown-menu"
            aria-labelledby="navbarDropdown"
            style="background-color: #c22d2d"
          >
            <a class="dropdown-item" href="#">包棟民宿</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/smalleye">背包客棧</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <h3 style="color: white">老屋保存</h3>
          </a>
          <div
            class="dropdown-menu"
            aria-labelledby="navbarDropdown"
            style="background-color: #c22d2d"
          >
            <a class="dropdown-item" href="#">Action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>

      <!--   Show this only lg screens and up   -->
      <a class="navbar-brand d-none d-lg-block" href="/">
        <img src="assets/logo.png" width="60" height="60" style=" border-radius:30%" />
      </a>

      <ul
        class="navbar-nav navbar-collapse justify-content-center"
        id="navbarNavDropdown"
      >
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <h3 style="color: white">文化教育</h3>
          </a>
          <div
            class="dropdown-menu"
            aria-labelledby="navbarDropdown"
            style="background-color: #c22d2d"
          >
            <a class="dropdown-item" href="#">展演空間</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">茉莉活動</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <h3 style="color: white">鹿港飲食</h3>
          </a>
          <div
            class="dropdown-menu"
            aria-labelledby="navbarDropdown"
            style="background-color: #c22d2d"
          >
            <a class="dropdown-item" href="/osmanthusalley">桂花巷人文茶館</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">北頭娛椿</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <h3 style="color: white">田野調查</h3>
          </a>
          <div
            class="dropdown-menu"
            aria-labelledby="navbarDropdown"
            style="background-color: #c22d2d"
          >
            <a class="dropdown-item" href="#">出版品</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</template>
<script>
export default {
  mounted() {
    console.log("Example component installed.");
  },
};
</script>

<style scoped>
/* .navbar {
  position: fixed;
  transform: translate3d(0,0,0);
  top: 0;
  z-index: 3;
  width: 100%;
} */
</style>