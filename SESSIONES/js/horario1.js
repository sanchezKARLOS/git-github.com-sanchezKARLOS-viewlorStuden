
    $scope.alertOnEventClick = function(date, jsEvent, view, size) {
        $scope.selected = date;
        // Modal

        $scope.animationsEnabled = true;

        var modalInstance = $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'horario.php',
            controller: 'ModalInstanceCtrl',
            size: size,
            resolve: {
                items: function() {
                    return $scope.selected;
                }
            }
        });

        $scope.toggleAnimation = function() {
            $scope.animationsEnabled = !$scope.animationsEnabled;
        };
        // FIM Modal

    };

    /* Change View */
    $scope.changeView = function(view, calendar) {
        uiCalendarConfig.calendars[calendar].fullCalendar('changeView', view);
    };
    $scope.renderCalender = function(calendar) {
        if (uiCalendarConfig.calendars[calendar]) {
            uiCalendarConfig.calendars[calendar].fullCalendar('render');
        }
    };

    var currentLangCode = 'pt-br';
    $scope.uiConfig = {
        calendar: {
            defaultView: 'month',
            height: "auto",
            lang: currentLangCode,
            editable: true,
            eventTextColor: '#fff',
            eventBorderColor: '#9987B5',
            eventBackgroundColor: '#9987B5',
            header: {
                left: 'title',
                center: 'month,agendaWeek,agendaDay',
                right: 'today prev,next'
            },
            eventClick: $scope.alertOnEventClick,
            eventDrop: $scope.alertOnDrop,
            eventResize: $scope.alertOnResize,
            eventRender: $scope.eventRender
        }
    };


   