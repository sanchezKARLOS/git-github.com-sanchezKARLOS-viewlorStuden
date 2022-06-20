<head>
    <link rel="stylesheet" href="./css/horario1.css">
   
</head>
<body>
<div ng-app="myApp">
    <div ng-controller="Ctrl">
        <p></p>
        <div class="container">
            <!--             <div class="row">
                <h3 uib-tooltip-html="htmlTooltip" tooltip-placement="bottom">{{teste}}</h3>
            </div> -->
            <!--     Modal Body     -->
            <script type="text/ng-template" id="horario.php">   
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" ng-click="cancel()"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">I'm a modal!</h3>
                </div>
                <div class="modal-body">
                    <div class="text-center well">
                    <p>
                        <label for="nome">{{    nome   }}</label>
                    </p>
                    <p>
                        <label for="nome">{{   gfExtenso    }}</label>
                    </p>
                </div>
                    <div class="form-group">
                        <label class="control-label">Nome do cliente</label>
                        <input type="text" class="form-control" id="title" ng-model="nome">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Data e Horário</label>
                        <input type="text" class="form-control" id="date" ng-model="date">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" ng-click="cancel()">Cancel</button>
                    <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
                </div>
            </script>
            <!--   END  Modal Body     -->

            <div>
                <div></div>
                <div select="renderCalender('myCalendar1');">
                    <div class="calendar" ng-model="eventSources" calendar="myCalendar1" ui-calendar="uiConfig.calendar"></div>
                </div>
            </div>
        </div>
        <p></p>
    </div>
</div>
<script src="./js/horario1.js"></script>
</body>