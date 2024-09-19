@extends('layouts.app')
@section('title', 'Offer')
@section('content')
    <header class="banner">
        <div class="banner__inner banner__inner--rooms --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury </p>
            <h2 class="font__subtitle font__subtitle--banner font__subtitle--dark">Our Offers</h2>
        </div>
        <div class="banner__pagination">
            <span>Home</span><span>|</span><span>Offers</span>
        </div>
    </header>
    <section class="offers offers__cards --max-width">
        <div class="offers__card">
            <a href="room-details.html"><img class="offers__img" src="assets/img/luxury-room.jpg" alt=""></a>
            <div class="offers__inner">
                <header class="offers__card-header">
                    <div>
                        <p class="offers__informative-text upper__case">Double Bed</p>
                        <p class="offers__title"><a href="room-details.html">Luxury Double Bed</a></p>
                    </div>
                    <div class="offers__prices">
                    <p class="offers__price offers__price--crossed">
                        <span>$500</span>
                        <span>/Night</span>
                    </p>
                    <p class="offers__price">
                        <span>$345</span>
                        <span>/Night</span>
                    </p>
                    </div>
                </header>
                <div class="offers__card-body">
                    <p class="offers__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                    </p>
                    <section class="offers__amenities">
                        <ul class="offers__amenities-list room-details__amenities-list">
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img"
                                    src="assets/icon/amenities-air-conditioner.svg" alt="">
                                <span class="room-details__amenities-list-item-text">Air conditioner </span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-breakfast.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Breakfast</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-cleaning.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Cleaning</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-grocery.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Grocery</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shop.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Shop near</span>
                            </li>
                        </ul>
                        <ul class="offers__amenities-list room-details__amenities-list">
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-wifi.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">High speed WiFi</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-kitchen.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Kitchen</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shower.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Shower</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img"
                                    src="assets/icon/amenities-single-bed.svg" alt="">
                                <span class="room-details__amenities-list-item-text">Single bed</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-towels.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Towels</span>
                            </li>
                        </ul>
                    </section>
                    <button class="offers__button upper__case"><a href="room-details.html">Book Now</a></button>
                </div>
                
            </div>
        </div>
        <div class="offers__card">
            <a href="room-details.html"><img class="offers__img" src="assets/img/luxury-room.jpg" alt=""></a>
            <div class="offers__inner">
                <header class="offers__card-header">
                    <div>
                        <p class="offers__informative-text upper__case">Double Bed</p>
                        <p class="offers__title"><a href="room-details.html">Luxury Double Bed</a></p>
                    </div>
                    <div class="offers__prices">
                    <p class="offers__price offers__price--crossed">
                        <span>$500</span>
                        <span>/Night</span>
                    </p>
                    <p class="offers__price">
                        <span>$345</span>
                        <span>/Night</span>
                    </p>
                    </div>
                </header>
                <div class="offers__card-body">
                    <p class="offers__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                    </p>
                    <section class="offers__amenities">
                        <ul class="offers__amenities-list room-details__amenities-list">
                            <li class="room-details__amenities-list-item room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img"
                                    src="assets/icon/amenities-air-conditioner.svg" alt="">
                                <span class="room-details__amenities-list-item-text">Air conditioner </span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-breakfast.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Breakfast</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-cleaning.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Cleaning</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-grocery.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Grocery</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shop.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Shop near</span>
                            </li>
                        </ul>
                        <ul class="offers__amenities-list room-details__amenities-list">
                            <li class="room-details__amenities-list-item room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-wifi.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">High speed WiFi</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-kitchen.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Kitchen</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shower.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Shower</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img"
                                    src="assets/icon/amenities-single-bed.svg" alt="">
                                <span class="room-details__amenities-list-item-text">Single bed</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-towels.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Towels</span>
                            </li>
                        </ul>
                    </section>
                    <button class="offers__button upper__case"><a href="room-details.html">Book Now</a></button>
                </div>
                
            </div>
        </div>
        <div class="offers__card">
            <a href="room-details.html"><img class="offers__img" src="assets/img/luxury-room.jpg" alt=""></a>
            <div class="offers__inner">
                <header class="offers__card-header">
                    <div>
                        <p class="offers__informative-text upper__case">Double Bed</p>
                        <p class="offers__title"><a href="room-details.html">Luxury Double Bed</a></p>
                    </div>
                    <div class="offers__prices">
                    <p class="offers__price offers__price--crossed">
                        <span>$500</span>
                        <span>/Night</span>
                    </p>
                    <p class="offers__price">
                        <span>$345</span>
                        <span>/Night</span>
                    </p>
                    </div>
                </header>
                <div class="offers__card-body">
                    <p class="offers__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                    </p>
                    <section class="offers__amenities">
                        <ul class="offers__amenities-list room-details__amenities-list">
                            <li class="room-details__amenities-list-item room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img"
                                    src="assets/icon/amenities-air-conditioner.svg" alt="">
                                <span class="room-details__amenities-list-item-text">Air conditioner </span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-breakfast.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Breakfast</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-cleaning.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Cleaning</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-grocery.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Grocery</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shop.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Shop near</span>
                            </li>
                        </ul>
                        <ul class="offers__amenities-list room-details__amenities-list">
                            <li class="room-details__amenities-list-item room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-wifi.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">High speed WiFi</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-kitchen.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Kitchen</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shower.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Shower</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img"
                                    src="assets/icon/amenities-single-bed.svg" alt="">
                                <span class="room-details__amenities-list-item-text">Single bed</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-towels.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Towels</span>
                            </li>
                        </ul>
                    </section>
                    <button class="offers__button upper__case"><a href="room-details.html">Book Now</a></button>
                </div>
                
            </div>
        </div>
        <div class="offers__card">
            <a href="room-details.html"><img class="offers__img" src="assets/img/luxury-room.jpg" alt=""></a>
            <div class="offers__inner">
                <header class="offers__card-header">
                    <div>
                        <p class="offers__informative-text upper__case">Double Bed</p>
                        <p class="offers__title"><a href="room-details.html">Luxury Double Bed</a></p>
                    </div>
                    <div class="offers__prices">
                    <p class="offers__price offers__price--crossed">
                        <span>$500</span>
                        <span>/Night</span>
                    </p>
                    <p class="offers__price">
                        <span>$345</span>
                        <span>/Night</span>
                    </p>
                    </div>
                </header>
                <div class="offers__card-body">
                    <p class="offers__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                    </p>
                    <section class="offers__amenities">
                        <ul class="offers__amenities-list room-details__amenities-list">
                            <li class="room-details__amenities-list-item room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img"
                                    src="assets/icon/amenities-air-conditioner.svg" alt="">
                                <span class="room-details__amenities-list-item-text">Air conditioner </span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-breakfast.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Breakfast</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-cleaning.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Cleaning</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-grocery.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Grocery</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shop.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Shop near</span>
                            </li>
                        </ul>
                        <ul class="offers__amenities-list room-details__amenities-list">
                            <li class="room-details__amenities-list-item room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-wifi.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">High speed WiFi</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-kitchen.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Kitchen</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shower.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Shower</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img"
                                    src="assets/icon/amenities-single-bed.svg" alt="">
                                <span class="room-details__amenities-list-item-text">Single bed</span>
                            </li>
                            <li class="room-details__amenities-list-item">
                                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-towels.svg"
                                    alt="">
                                <span class="room-details__amenities-list-item-text">Towels</span>
                            </li>
                        </ul>
                    </section>
                    <button class="offers__button upper__case"><a href="room-details.html">Book Now</a></button>
                </div>
                
            </div>
        </div>
    </section>
    <section class="offers__popular-rooms">
        <p class="offers__popular-rooms-informative-text upper__case">Popular List</p>
        <p class="offers__popular-rooms-title">Popular Rooms</p>
        <div class="offers__swiper swiper --max-width">
            <!-- Additional required wrapper -->
            <div class="offers__swiper-wrapper swiper-wrapper">
                <!-- Slides -->
                <div class="offers__swiper-slide rooms__grid-item swiper-slide">
                    <img src="assets/img/luxury-room-3.jpg" alt="">
                    <menu class="rooms__grid-item-menu rooms__menu offers__menu">
                        <span class="rooms__menu-item">
                            <img src="assets/icon/bed.svg" alt="icono de una cama">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/wifi.svg" alt="icono de conexión wifi">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/car.svg" alt="icono de un coche">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/snowflake.svg" alt="icono de un copo de nieve">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/gym.svg" alt="icono de una mancuerna">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/no-smoking.svg" alt="icono de prohibido fumar">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/cocktail.svg" alt="icono de un coctel">
                        </span>
                    </menu>
                    <div class="rooms__grid-item-details offers__details">
                        <p class="rooms__grid-item-details-title">Minimal Duplex Room</p>
                        <p class="rooms__grid-item-details-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipi sicing elit, sed do eiusmod tempor.
                        </p>
                        <p class="rooms__grid-item-details-price">
                            <span>$345/Night</span><span><a href="room-details.html"></a></span>
                        </p>
                    </div>
                </div>
                <div class="offers__swiper-slide rooms__grid-item swiper-slide">
                    <img src="assets/img/luxury-room-2.jpg" alt="">
                    <menu class="rooms__grid-item-menu rooms__menu offers__menu">
                        <span class="rooms__menu-item">
                            <img src="assets/icon/bed.svg" alt="icono de una cama">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/wifi.svg" alt="icono de conexión wifi">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/car.svg" alt="icono de un coche">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/snowflake.svg" alt="icono de un copo de nieve">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/gym.svg" alt="icono de una mancuerna">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/no-smoking.svg" alt="icono de prohibido fumar">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/cocktail.svg" alt="icono de un coctel">
                        </span>
                    </menu>
                    <div class="rooms__grid-item-details offers__details">
                        <p class="rooms__grid-item-details-title">Minimal Duplex Room</p>
                        <p class="rooms__grid-item-details-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipi sicing elit, sed do eiusmod tempor.
                        </p>
                        <p class="rooms__grid-item-details-price">
                            <span>$345/Night</span><span><a href="room-details.html"></a></span>
                        </p>
                    </div>
                </div>
                <div class="offers__swiper-slide rooms__grid-item swiper-slide">
                    <img src="assets/img/luxury-room.jpg" alt="">
                    <menu class="rooms__grid-item-menu rooms__menu offers__menu">
                        <span class="rooms__menu-item">
                            <img src="assets/icon/bed.svg" alt="icono de una cama">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/wifi.svg" alt="icono de conexión wifi">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/car.svg" alt="icono de un coche">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/snowflake.svg" alt="icono de un copo de nieve">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/gym.svg" alt="icono de una mancuerna">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/no-smoking.svg" alt="icono de prohibido fumar">
                        </span>
                        <span class="rooms__menu-item">
                            <img src="assets/icon/cocktail.svg" alt="icono de un coctel">
                        </span>
                    </menu>
                    <div class="rooms__grid-item-details offers__details">
                        <p class="rooms__grid-item-details-title">Minimal Duplex Room</p>
                        <p class="rooms__grid-item-details-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipi sicing elit, sed do eiusmod tempor.
                        </p>
                        <p class="rooms__grid-item-details-price">
                            <span>$345/Night</span><span><a href="room-details.html"></a></span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="offers__swiper-button-prev swiper-button-prev"></div>
            <div class="offers__swiper-button-next swiper-button-next"></div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection