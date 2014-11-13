app.factory('factories.admin', [
    '$http'
	, function(
		$http
	){
    			
		var Admin = function( params ){
			console.log('jhi');
			this.elements = [];
			this.populate();
			
		};
				
		// get data from Rest Api
		Admin.prototype.populate = function(){
			
			var self = this;
			this.list = [];
			
			return $http.get(
				'api/SessionCardTemplate'
			).then(function( response ){
				
				var templates = response.data;
				self.elements.length = 0;
				for( var k in templates ){
					self.elements.push(new CustomCardElement({
						properties: templates[k]
					}));
					
				}
				console.log(self.elements);
				return response;
				
			});
			
		};
		
		return Admin;
	}
]);
