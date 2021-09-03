<template>
    <div class="top-line">
      <div class="top-line-wrap">
        <div class="logo">
          <Icon icon="simple-icons:yourtraveldottv" />
          <div>logo</div>
        </div>
        <div class="social-buttons">
          <Icon icon="entypo-social:vk-alternitive" class="vk" />
          <Icon icon="fa-brands:instagram-square" class="instagram" />
          <Icon icon="fa-brands:whatsapp-square" class="whatsapp" />
        </div>
        <div class="contacts">
          <h2 class="tel">
            <Icon icon="healthicons:call-centre" class="tel-icon" />
            <a href="tel:+7777777777" target="_blank">+7777777777</a></h2>
          <p class="mail">
            <Icon icon="fluent:mail-24-filled"  class="mail-icon" />
            <a href="mailto:mmm@mail.ru">mmm@mail.ru</a></p>
        </div>
        <div class="buttons-active">
          <a href="#hotTours" class="hot-tour">
            <Icon icon="bx:bxs-hot" />
            <h3>Горящий тур</h3>
          </a>
          <a href="#callBack" class="call-back">
            <Icon icon="fluent:call-inbound-28-filled" />
            <h3>Обратная связь</h3>
          </a>
          <a href="#TourSelection" class="tour-selection">
            <Icon icon="fa-solid:search-location" />
            <h3>Подбор тура</h3>
          </a>
        </div>
      </div>
    </div>
  <header class="header">
    <div class="header-title">
      <h1>С нами отдыхать легко!</h1>
    </div>
    <div class="search-tour">
      <div data-sletat-module-id="dbf179e7-b2e9-439d-b15b-6e6771dd2bbf"></div>
    </div>
  </header>
</template>
<script>
export default {};
</script>

<style lang="scss">
body {
  @apply min-h-full;
}
.header {
  background: url(./assets/img/headers.jpg) center center no-repeat;
  @apply w-full h-[650px] bg-cover flex flex-col relative mt-[80px];
  &::after {
    content: '';
    @apply absolute left-0 right-0 top-0 bottom-0 bg-blue-500 bg-opacity-25;
  }
}
.top-line {
  @apply bg-white fixed top-0 w-full h-[80px] shadow-md z-10;
  &-wrap {
    @apply w-[1366px] mx-auto flex px-2 h-[80px];
  }
  .logo {
    @apply w-1/12 flex text-orange-500 flex-col items-center justify-center text-2xl;
  }
  .social-buttons {
    @apply w-2/12 flex justify-start items-center;
    .vk {
    @apply text-blue-600 mr-4 text-4xl cursor-pointer hover:(text-blue-400);
    }
    .instagram {
      @apply text-pink-500 mr-4 text-4xl cursor-pointer hover:(text-pink-400);
    }
    .whatsapp {
      @apply text-green-500 text-4xl cursor-pointer hover:(text-green-400);
    }
  }
  .contacts {
    @apply  w-m-4/12 flex justify-center items-center;
    .tel, .mail {
      @apply flex items-center text-2xl;
    }
    .tel-icon {
      @apply mr-2 text-green-600;
    }
    .mail-icon {
      @apply mr-2 text-blue-600;
    }
    & a {
      @apply pr-6 hover:(text-orange-500);
    }
  }
  .buttons-active {
    @apply w-5/12 flex justify-end items-center;
    .hot-tour, .call-back, .tour-selection {
      @apply flex items-center text-xl px-3 py-2 rounded-md shadow-md transition-shadow transition-transform delay-100 transform hover:(translate-y-1 shadow-none);
    } 
    .hot-tour {
      @apply mr-2 bg-orange-500 text-white;
    }
    .call-back {
      @apply mr-2 bg-green-500 text-white;
    }
    .tour-selection {
      @apply bg-blue-500 text-white;
    }
  }
}
.header-title {
  @apply m-auto z-10;
  h1 {
    @apply text-7xl text-white font-bold text-shadow-md shadow-white;
  }
}
.search-tour {
  @apply mx-auto mt-auto max-w-[850px] w-full bg-dark-500 bg-opacity-35 z-10;
}
.SLT-SearchForm-transparent__searchBtn {
  background-color: #f97316 !important;
}
</style>
