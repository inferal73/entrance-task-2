<?php
$title = "Яндекс.Переговорки";
$page = "event";
include('include/header.php');
?>

<main class="page-body">
    <div class="inner-wrapper">
        <div class="page-title">
            <h2>Редактирование встречи</h2>
            <div class="page-title-actions">
                <a href="/" class="button-with-icon">
                    <svg width="10" height="10">
                        <use xlink:href="#close"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="columns two-col">
            <div class="col">
                <div class="input-element">
                    <label for="subject">Тема</label>
                    <div class="input">
                        <input type="text" id="subject" placeholder="О чём будете говорить?" value="Тестовое задание в ШРИ" required>
                        <button class="input-action input-reset">
                            <svg width="10" height="10">
                                <use xlink:href="#close"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="input-element">
                    <label for="member">Участники</label>
                    <div class="input">
                        <input type="text" id="member" placeholder="Например, Тор Одинович" required>
                        <button class="input-action input-reset">
                            <svg width="10" height="10">
                                <use xlink:href="#close"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <ul class="member-list">
                    <li>
                        <img src="/assets/img/avatar01.jpg" class="member-avatar">
                        <span class="member-name">Лекс Лютер</span>
                        <button class="member-remove">
                            <svg width="10" height="10">
                                <use xlink:href="#close"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <img src="/assets/img/avatar02.jpg" class="member-avatar">
                        <span class="member-name">Томас Андерсон</span>
                        <button class="member-remove">
                            <svg width="10" height="10">
                                <use xlink:href="#close"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <img src="/assets/img/avatar03.jpg" class="member-avatar">
                        <span class="member-name">Дарт Вейдер</span>
                        <button class="member-remove">
                            <svg width="10" height="10">
                                <use xlink:href="#close"></use>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col">
                <div class="time-inputs">
                    <div class="time-input">
                        <div class="input-element">
                            <label for="subject">Дата</label>
                            <div class="input">
                                <input type="text" id="subject" value="14 декабря, 2017">
                                <button class="input-action input-reset">
                                    <svg width="10" height="10">
                                        <use xlink:href="#calendar"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="time-input">
                        <div class="input-element">
                            <label for="subject">Начало</label>
                            <div class="input">
                                <input type="text" id="subject" value="16:00">
                            </div>
                        </div>
                    </div>
                    <div class="time-splitter">
                        —
                    </div>
                    <div class="time-input">
                        <div class="input-element">
                            <label for="subject">Конец</label>
                            <div class="input">
                                <input type="text" id="subject" value="16:30">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recommend-rooms">
                    <label>Рекомендованные переговорки</label>
                    <button class="recommend-room recommend-room-selected">
                        <span class="recommend-room-time">16:00—16:30</span>
                        <span class="recommend-room-title">Готем · 4 этаж</span>
                        <a href="#" class="room-remove">
                            <svg width="10" height="10">
                                <use xlink:href="#close"></use>
                            </svg>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="mobile-delete-button">
            <button onclick="document.body.classList.add('popup-visible')" class="mobile-delete">Удалить встречу</button>
        </div>
        <div class="page-actions">
            <a href="/" class="button button-grey">Отмена</a>
            <button onclick="document.body.classList.add('popup-visible')" class="button button-grey desktop-delete-button">Удалить встречу</button>
            <a href="/" class="button button-blue">Сохранить</a>
        </div>
    </div>
</main>

<div class="popup">
    <div class="popup-overlay"></div>
    <div class="popup-content">
        <div class="popup-image">
            <img src="/assets/img/emoji1.svg" alt="">
        </div>
        <div class="popup-title">
            <h2>Встреча будет <br>удалена безвозвратно</h2>
        </div>
        <div class="popup-actions">
            <button onclick="document.body.classList.remove('popup-visible')" class="button button-grey">Отмена</button>
            <a class="button button-grey" href="/">Удалить</a>
        </div>
    </div>
</div>

<script src="/dist/js/common.js"></script>
<script src="/dist/js/main.js"></script>
<script src="/dist/js/<?=$page?>.js"></script>
</body>