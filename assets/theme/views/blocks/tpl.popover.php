<div class="popover popover-right" tabindex="-1" ng-show="content">
  <div class="popover-arrow"></div>
  <h3 class="popover-title" ng-bind-html="title" ng-show="title"></h3>
  <div class="popover-content">
    <form name="popoverForm">
      <p ng-bind-html="content" style="min-width:300px;"></p>
      <pre>2 + 3 = <span ng-cloak>{{ 2 + 3 }}</span></pre>
      <div class="form-actions">
        <button type="button" class="btn btn-danger" ng-click="$hide()">Close</button>
        <button type="button" class="btn btn-primary" ng-click="popover.saved=true;$hide()">Save changes</button>
      </div>
    </form>
  </div>
</div>
