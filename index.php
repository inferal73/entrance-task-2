<?php
$title = "Яндекс.Переговорки";
$page = "index";
include('include/header.php');
?>

<main class="page-body">
    <div class="workspace">
        <div class="workspace-top-bar">
            <div class="workspace-date-controls">
                <div class="button-with-icon">
                    <svg width="10" height="10">
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
                <div class="workspace-calendar">
                    <a href="#" class="workspace-calendar-title" onclick="document.querySelector('.workspace-calendar-container').classList.add('visible'); return true;"><h3>14 дек · Сегодня</h3></a>
                    <div class="workspace-calendar-container" onclick="this.classList.remove('visible');"></div>
                </div>
                <div class="button-with-icon">
                    <svg width="10" height="10">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </div>
            <div class="workspace-time-grade">
                <div class="workspace-current-time" style="left: 19.5%;">
                    11:05
                </div>
                <ul class="workspace-time-list">
                    <li class="passed">8:00</li>
                    <li class="passed">9</li>
                    <li class="passed">10</li>
                    <li class="passed">11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                </ul>
            </div>
        </div>
        <div class="workspace-body">
            <div class="workspace-left-bar">
                <div class="rooms">
                    <div class="rooms-floor-number"><h4>7 Этаж</h4></div>
                    <ul class="rooms-list">
                        <li class="disabled">
                            <div class="room-title"><h3>Ржавый Фред</h3></div>
                            <span class="room-member-length">3—6 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-13:00"></li>
                                <li class="room-event" data-time="13:00-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                        <li>
                            <div class="room-title"><h3>Праченая</h3></div>
                            <span class="room-member-length">до 10 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-11:05"></li>
                                <li class="room-empty-space" data-time="11:05-12:00"></li>
                                <li class="room-empty-space" data-time="12:00-13:00"></li>
                                <li class="room-empty-space" data-time="13:00-14:00"></li>
                                <li class="room-empty-space" data-time="14:00-14:05"></li>
                                <li class="room-event" data-time="14:05-16:35"></li>
                                <li class="room-event" data-time="16:35-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                        <li class="active">
                            <div class="room-title"><h3>Жёлтый дом</h3></div>
                            <span class="room-member-length">до 10 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-9:00"></li>
                                <li class="room-event" data-time="9:00-10:00"></li>
                                <li class="room-event" data-time="10:00-11:00"></li>
                                <li class="room-event" data-time="11:00-12:00"></li>
                                <li class="room-event" data-time="12:00-13:00"></li>
                                <li class="room-empty-space" data-time="13:00-14:00"></li>
                                <li class="room-empty-space" data-time="14:00-15:00"></li>
                                <li class="room-empty-space" data-time="15:00-16:00"></li>
                                <li class="room-event" data-time="16:00-17:00"></li>
                                <li class="room-event" data-time="17:00-18:00"></li>
                                <li class="room-event" data-time="18:00-19:00"></li>
                                <li class="room-event" data-time="19:00-20:00"></li>
                                <li class="room-event" data-time="20:00-21:00"></li>
                                <li class="room-event" data-time="21:00-22:00"></li>
                                <li class="room-event" data-time="22:00-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                        <li class="disabled">
                            <div class="room-title"><h3>Оранжевый тюльпан</h3></div>
                            <span class="room-member-length">до 10 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-13:00"></li>
                                <li class="room-event" data-time="13:00-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="rooms">
                    <div class="rooms-floor-number"><h4>6 Этаж</h4></div>
                    <ul class="rooms-list">
                        <li>
                            <div class="room-title"><h3>Джокер</h3></div>
                            <span class="room-member-length">3—6 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-11:05"></li>
                                <li class="room-empty-space" data-time="11:05-12:00"></li>
                                <li class="room-empty-space" data-time="12:00-13:00"></li>
                                <li class="room-empty-space" data-time="13:00-14:00"></li>
                                <li class="room-empty-space" data-time="14:00-14:05"></li>
                                <li class="room-event" data-time="14:05-16:35"></li>
                                <li class="room-event" data-time="16:35-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                        <li>
                            <div class="room-title"><h3>Мариванна</h3></div>
                            <span class="room-member-length">3—6 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-11:05"></li>
                                <li class="room-empty-space" data-time="11:05-12:00"></li>
                                <li class="room-event" data-time="12:00-13:00"></li>
                                <li class="room-event" data-time="13:00-14:05"></li>
                                <li class="room-event" data-time="14:05-16:35"></li>
                                <li class="room-event" data-time="16:35-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                        <li>
                            <div class="room-title"><h3>Тонкий Боб</h3></div>
                            <span class="room-member-length">3—6 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-11:05"></li>
                                <li class="room-event" data-time="11:05-12:00"></li>
                                <li class="room-event" data-time="12:00-13:00"></li>
                                <li class="room-event" data-time="13:00-14:00"></li>
                                <li class="room-event" data-time="14:00-16:35"></li>
                                <li class="room-empty-space" data-time="16:35-17:00"></li>
                                <li class="room-empty-space" data-time="17:00-18:00"></li>
                                <li class="room-empty-space" data-time="18:00-19:00"></li>
                                <li class="room-empty-space" data-time="19:00-20:00"></li>
                                <li class="room-empty-space" data-time="20:00-21:00"></li>
                                <li class="room-event" data-time="21:00-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                        <li>
                            <div class="room-title"><h3>Чёрная вдова</h3></div>
                            <span class="room-member-length">3—6 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-11:05"></li>
                                <li class="room-empty-space" data-time="11:05-12:00"></li>
                                <li class="room-empty-space" data-time="12:00-13:00"></li>
                                <li class="room-empty-space" data-time="13:00-14:00"></li>
                                <li class="room-event" data-time="14:00-16:35"></li>
                                <li class="room-event" data-time="16:35-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                        <li>
                            <div class="room-title"><h3>Белорусский ликёр</h3></div>
                            <span class="room-member-length">3—6 человек</span>
                            <ul class="room-events">
                                <li class="room-event disabled"></li>
                                <li class="room-event" data-time="8:00-10:10"></li>
                                <li class="room-empty-space disabled" data-time="10:10-11:05"></li>
                                <li class="room-empty-space" data-time="11:05-12:00"></li>
                                <li class="room-event" data-time="12:00-16:35"></li>
                                <li class="room-event" data-time="16:35-23:00"></li>
                                <li class="room-event disabled"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="workspace-time-line">
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
                <div class="workspace-time-line-hour"></div>
            </div>
        </div>
    </div>
</main>

<script src="/dist/js/common.js"></script>
<script src="/dist/js/main.js"></script>
<script src="/dist/js/<?=$page?>.js"></script>
</body>