var Actors = {
	init: function( config ){
		this.config = config;
		this.setupTemplates();
		this.bindEvents();
	},

	bindEvents: function(){
		this.config.letterSelection.on('change', this.fetchActors);
	},

	setupTemplates: function(){
		this.config.actorListTemplate = Handlebars.compile(this.config.actorListTemplate);

		Handlebars.registerHelper('fullName', function(actor) {
			return actor.first_name + ' ' + actor.last_name;
		});
	},

	fetchActors: function(){
		var self = Actors;
		$.ajax({
			url: 'test.php',
			type: 'POST',
			dataType: 'json',
			data: self.config.form.serialize(),
			success: function(results){
				console.log(self.config.actorListTemplate(results));
				self.config.actorsList.empty().append(self.config.actorListTemplate(results));
			}
		});
	}
};

Actors.init({
	letterSelection: $('#q'),
	form: $('#actor_selection'),
	actorListTemplate: $('#actor_list_template').html(),
	actorsList: $('ul.actors_list')
});