!function(t){var e=Upfront.Settings&&Upfront.Settings.l10n?Upfront.Settings.l10n.global.views:Upfront.mainData.l10n.global.views;define([],function(){return Backbone.View.extend({tagName:"span",className:"draggable-element upfront-no-select",shadow_id:"",draggable:!0,priority:1e4,initialize:function(t){this.options=t,this.title=t.title||e.no_title},render:function(){this.$el.html(this.title)},add_module:function(t){var e=this.model.get("regions").get_by_name("shadow");return e&&e.get?(this.shadow_id=Upfront.Util.get_unique_id("shadow"),t.set({shadow:this.shadow_id},{silent:!0}),void e.get("modules").add(t)):!1}})})}(jQuery);