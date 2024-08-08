
    <div class="container">
        <div class="left">
            <div class="calendar">
                <div class="month">
                    <i class="fa fa-angle-left prev"></i>
                    <div class="date">novembro 2022</div>
                    <i class="fa fa-angle-right next"></i>

                </div>
                <div class="weekdays">
                    <div>dom</div>
                    <div>seg</div>
                    <div>ter</div>
                    <div>qua</div>
                    <div>qui</div>
                    <div>sex</div>
                    <div>sab</div>

                </div>
              
                <div class="days"></div>
                <div class="goto-today">
                    <div class="goto">
                        <input type="text" placeholder="mm/yyyy" class="date-input" />
                        <button class="goto-btn">Go</button>
                    </div>
                    <button class="today-btn">Today</button>
                </div>
            </div>
        </div>


        <div class="right">
            <div class="today-date">
                <div class="event-day">wed</div>
                <div class="event-date">12th december 2022</div>
            </div>
            <div class="events"></div>
            <div class="add-event-wrapper">
                <div class="add-event-header">
                    <div class="title">Add Event</div>
                    <i class="fas fa-times close"></i>
                </div>
                <div class="add-event-body">
                    <div class="add-event-input">
                        <input type="text" placeholder="Event Name" class="event-name" />
                    </div>
                    <div class="add-event-input">
                        <input type="text" placeholder="Event Time From" class="event-time-from" />
                    </div>
                    <div class="add-event-input">
                        <input type="text" placeholder="Event Time To" class="event-time-to" />
                    </div>
                </div>
                <div class="add-event-footer">
                    <button class="add-event-btn">Add Event</button>
                </div>
            </div>
        </div>
        <button class="add-event">
            <i class="fas fa-plus"></i>
        </button>
    </div>

   
        <script src="../script.js"></script>
</body>

</html>

