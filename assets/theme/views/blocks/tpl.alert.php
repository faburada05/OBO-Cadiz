<div class="alert alert-warning" tabindex="-1" ng-class="[type ? 'alert-' + type : null]">
  <button type="button" class="close" ng-click="$hide()">&times;</button>
  <strong ng-bind="title"></strong>&nbsp;<span ng-bind-html="content"></span>
</div>
