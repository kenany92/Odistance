/**
 * Created by armel on 04/06/15.
 */
'use stict';
angular.module('Menu',['ngRoute'])
    .run(function($location, $rootScope, $timeout){
    'use strict';
    
	//$location.path('/');
	$rootScope.$on('$routeChangeSuccess',function(){
		$timeout(function () {}, 1000);
        //alert('url changée avec succes');
	});
	$rootScope.$on('$routeChangeStart',function(){
		$timeout(function () {}, 4000);
        //alert('Début de la procédure de changement l\'url');
	});
	$rootScope.$on('$routeChangeError',function(){
		alert('Echec lors du changement de l\'url');
	});
    $rootScope.test = [];
    $rootScope.vider = function(){
        $rootScope.test = [];
    }
    
})
	.factory('colorSize', function(){
		var factory = {};

		factory.getColor = function(){
			var colors = ['color','color1','color2','color3'];
			return colors;
		};

		factory.getSize = function(){
			var sizes = ['S','XS','M','L','XL','XXL'];
			return sizes;
		}
		return factory;
	})
.factory('WaitInit', ['$timeout', function ($timeout) {
    return $timeout(function () {}, 1000);
}])
.factory('CartFactory',
        function(){
    var factory = {};
    factory.getCartList = function(){
        var list = [{img:'../images/pi.jpg',qty:1}];
        return list;
    }
    return factory;
})
.controller('language',
	function($scope){
		$scope.langues = [{lang:'Français', key:'fr'},
						  {lang:'Anglais', key:'en'},
						  {lang:'Allemand', key:'de'},
						  {lang:'Espagnol', key:'es'}];
		})
.controller('topMenu',
	function($scope){
		$scope.topmenus = [{name:'brands', page:'#/produits'},
						   {name:'about_us', page:'#/error'},
						   {name:'contact_us', page:'#/contact'},
						   {name:'how_to_use', page:'#'}
						  ];
		})
.controller('articleMenu',
	function($scope){
		
		//première liste des articles du menu fashion
		$scope.firstFashionSubmenus = [{name:'Accessiore', text:'Accessoire', page:'#/produits', availability:''},
									  {name:'Bags', text:'Sacs', page:'#/produits', availability:''},
									  {name:'Caps_Hats', text:'Casquettes & Chapeaux', page:'#/produits', availability:''},
									  {name:'Hoodies_Sweatshirts', text:'Polo & Pull-over', page:'#/produits', availability:''},
									  {name:'Jackets_Coats', text:'Jaquettes & Vestes', page:'#/produits', availability:''},
									  {name:'Jeans', text:'Jeans', page:'#/produits', availability:''},
									  {name:'Jewellery', text:'Bijoux', page:'#/produits', availability:''},
									  {name:'Jumpers_Cardigans', text:'Cavaliers & Gilets', page:'#/produits', availability:''},
									  {name:'Leather_Jackets', text:'Vestes en cuir', page:'#/produits', availability:''},
									  {name:'Long_Sleeve_TShirts', text:'T-Shirts longues manches', page:'#/produits', availability:''},
									  {name:'Loungewear', text:'Loungewear', page:'#/produits', availability:''}
									 ];
		
		//deuxième liste des articles du menu fashion
		$scope.secondFashionSubmenus = [{name:'Shirts', text:'Shirts', page:'#/produits', availability:''},
										{name:'Shoes_Boots_Trainers', text:'Chaussures & Bottes', page:'#/produits', availability:''},
										{name:'Shorts', text:'Shorts', page:'#/produits', availability:''},
										{name:'Suits_Blazers', text:'Costumes & Blazers', page:'#/produits', availability:''},
										{name:'Sunglasses', text:'Lunettes de soleil', page:'#/produits', availability:''},
										{name:'Sweatpants', text:'Jogging', page:'#/produits', availability:''},
										{name:'Swimwear', text:'Maillots de bain', page:'#/produits', availability:''},
										{name:'Trousers_Chinos', text:'Pantalons & chinos', page:'#/produits', availability:''},
										{name:'TShirts', text:'T-Shirts', page:'#/produits', availability:''},
										{name:'Underwear_Socks', text:'Lingeries & Chaussettes', page:'#/produits', availability:''},
										{name:'Vests', text:'Gilets', page:'#/produits', availability:''}
									   ];
									   
		//liste des marques populaires
		$scope.popularBrandsFashionSubmenus = [{name:'Levis', page:'#/produits', availability:''},
											  {name:'Persol', page:'#/produits', availability:''},
											  {name:'Nike', page:'#/produits', availability:''},
											  {name:'Edwin', page:'#/produits', availability:''},
											  {name:'New Balance', page:'#/produits', availability:''},
											  {name:'Jack & Jones', page:'#/produits', availability:''},
											  {name:'Paul Smiths', page:'#/produits', availability:''},
											  {name:'Ray-Ban', page:'#/produits', availability:''},
											  {name:'Wood Wood', page:'#/produits', availability:''}
											 ];
											 
		//première liste des articles du menu fournitures
		$scope.firstFurnitureSubmenus = [{name:'Bed', text:'Lits', page:'#/decor', availability:''},
										 {name:'Chest', text:'Poitrines', page:'#/decor', availability:''},
										 {name:'Stool_Reider', text:'Tabourets', page:'#/decor', availability:''},
										 {name:'Chair_Carpet', text:'Chaises & Tapis', page:'#/decor', availability:''},
										 {name:'Curtain_Brix', text:'Rideaux & Brix', page:'#/decor', availability:''},
										 {name:'Shelf', text:'Etagères', page:'#/decor', availability:''},
										 {name:'Desk', text:'', page:'#/decor', availability:''},
										 {name:'Sofa_Anson', text:'Sofa & Anson', page:'#/decor', availability:''},
										 {name:'Bench', text:'Bancs', page:'#/decor', availability:''},
										 {name:'Sink', text:'Lavabo', page:'#/decor', availability:''},
										 {name:'Lamp', text:'Ampoules', page:'#/decor', availability:''},
										];
										
		//deuxième liste des articles du menu fournitures
		$scope.secondFurnitureSubmenus = [{name:'Armchair', text:'Fauteuil', page:'#/decor', availability:''},
										 {name:'Reider_Bench', text:'Bancs', page:'#/decor', availability:''},
										 {name:'Carpet_Desk', text:'Tapis & Bureaux', page:'#/decor', availability:''},
										 {name:'Wardrobe_Lamp', text:'Penderies & Lampes', page:'#/decor', availability:''},
										 {name:'Car_seat', text:'Siège de voiture', page:'#/decor', availability:''},
										 {name:'Lounger', text:'Lits de plage', page:'#/decor', availability:''},
										 {name:'Anson', text:'Anson', page:'#/decor', availability:''},
										 {name:'Karlstad', text:'Karlstad', page:'#/decor', availability:''},
										 {name:'Camilla_Wardrobe', text:'Camilla', page:'#/decor', availability:''},
										 {name:'Colton', text:'Colton', page:'#/decor', availability:''},
										 {name:'Brix', text:'Brix', page:'#/decor', availability:''},
										];
										
		//première liste des articles du menu mobiles et tablets
		$scope.firstMobileSubmenus = [{name:'Lenovo_Tablets', text:'Tablettes Lenovo', page:'#/mobile', availability:''},
									  {name:'Motorola', text:'Motorola', page:'#/mobile', availability:''},
									  {name:'Samsung', text:'Samsung', page:'#/mobile', availability:''},
									  {name:'Htc_Tab', text:'Tablettes Htc', page:'#/mobile', availability:''},
									  {name:'Dell_Compaq', text:'Dell & Compaq', page:'#/mobile', availability:''},
									  {name:'Asus_Tablets', text:'Tablettes Asus', page:'#/mobile', availability:''},
									  {name:'Microsoft', text:'Microsoft', page:'#/mobile', availability:''},
									  {name:'Moto_Moto', text:'Moto E & Moto G', page:'#/mobile', availability:''},
									  {name:'Intex', text:'Intex', page:'#/mobile', availability:''},
									  {name:'Hauwei_Lumia', text:'Huawei Lumia',page:'#/mobile', availability:''},
									  {name:'Loungewear', text:'Loungewear', page:'#/mobile', availability:''},
									 ];
									 
		//deuxième liste des articles du menu mobiles et tablets
		$scope.secondMobileSubmenus = [{name:'Asus_Zenfone', text:'Asus Zenfone 2', page:'#/mobile', availability:''},
									  {name:'Nikon_Sony', text:'Nikon & Sony', page:'#/mobile', availability:''},
									  {name:'Shorts', text:'Shorts', page:'#/mobile', availability:''},
									  {name:'Olymplus', text:'Olympus', page:'#/mobile', availability:''},
									  {name:'Sunglasses', text:'Lunettes de soleil', page:'#/mobile', availability:''},
									  {name:'Samsung_Nx', text:'Samsung Nx', page:'#/mobile', availability:''},
									  {name:'Printers_Monitors', text:'Imprimantes et Moniteurs', page:'#/mobile', availability:''},
									  {name:'Routers', text:'Routeurs', page:'#/mobile', availability:''},
									  {name:'Data_Card', text:'Supports de données', page:'#/mobile', availability:''},
									  {name:'Mouse_Keyboard', text:'Souris et Claviers', page:'#/mobile', availability:''},
									  {name:'Ink_Cartridges', text:'Cartouches d\'encre', page:'#/mobile', availability:''},
									 ];
									 
		//première liste provisoires des articles du menu health and beauty
		$scope.firstHealthSubmenus = [];
		
		//première liste des articles du menu tvs, gaming and camera
		$scope.firstGamingSubmenus = [{name:'Lenovo_Tablets', text:'Tablettes Lenovo', page:'#/produits', availability:''},
									  {name:'Motorola', text:'Motorola', page:'#/produits', availability:''},
									  {name:'Samsung', text:'Samsung', page:'#/produits', availability:''},
									  {name:'Htc_Tab', text:'Tablettes Htc', page:'#/produits', availability:''},
									  {name:'Dell_Compaq', text:'Dell & Compaq', page:'#/produits', availability:''},
									  {name:'Asus_Tablets', text:'Tablettes Asus', page:'#/produits', availability:''},
									  {name:'Microsoft', text:'Microsoft', page:'#/produits', availability:''},
									  {name:'Moto_Moto', text:'Moto E & Moto G', page:'#/produits', availability:''},
									  {name:'Intex', text:'Intex', page:'#/produits', availability:''},
									  {name:'Hauwei_Lumia', text:'Huawei Lumia',page:'#/produits', availability:''},
									  {name:'Loungewear', text:'Loungewear', page:'#/produits', availability:''},
									];
		//deuxième liste des articles du menu tvs, gaming and camera						 
		$scope.secondGamingSubmenus = [{name:'Asus_Zenfone', text:'Asus Zenfone 2', page:'#/produits', availability:''},
									   {name:'Nikon_Sony', text:'Nikon & Sony', page:'#/produits', availability:''},
									   {name:'Shorts', text:'Shorts', page:'#/produits', availability:''},
									   {name:'Olymplus', text:'Olympus', page:'#/produits', availability:''},
									   {name:'Sunglasses', text:'Lunettes de soleil', page:'#/produits', availability:''},
									   {name:'Samsung_Nx', text:'Samsung Nx', page:'#/produits', availability:''},
									   {name:'Printers_Monitors', text:'Imprimantes et Moniteurs', page:'#/produits', availability:''},
									   {name:'Routers', text:'Routeurs', page:'#/produits', availability:''},
									   {name:'Data_Card', text:'Supports de données', page:'#/produits', availability:''},
									   {name:'Mouse_Keyboard', text:'Souris et Claviers', page:'#/produits', availability:''},
									   {name:'Ink_Cartridges', text:'Cartouches d\'encre', page:'#/produits', availability:''},
									 ];
		})
.controller('test',
	function($scope, $log, $rootScope, $http, colorSize, CartFactory){
		
        $scope.colors = colorSize.getColor();
		$scope.sizes = colorSize.getSize();
        $scope.addItem = function(itemImg){
            var bool = false;
            for(var i=0; i<$rootScope.test.length; i++){
                if($rootScope.test[i].img == itemImg){
                    $rootScope.test[i].qty+=1;
                    bool = true;
                }
            }
            if(!bool){
            $rootScope.test.push(
                {img:itemImg, qty:1}
            );
            //alert('ajout de : '+itemImg);
            /*var items = CartFactory.getCartList();
            for(var i=0; i<items.length; i++){
                 $log.info(CartFactory.getCartList()[i].img);
            }*/
            
            }
            for(var i=0; i<$rootScope.test.length; i++){
                $log.info($rootScope.test[i].img+"  "+$rootScope.test[i].qty);
            }
            
            
        };
	})
.controller('articleController',
           function($scope, $routeParams, colorSize){
        $scope.colors = colorSize.getColor();
		$scope.sizes = colorSize.getSize();
    $scope.param = '../images/'+$routeParams.nom;
    //alert($routeParams.nom);
})
.controller('decorController',
           function($scope){
    
    //$scope.decorMenus = [{href:'}]
})
.controller('cartController',
           function($scope, $rootScope, $http, CartFactory){
    $scope.items = $rootScope.test;
    $http.get('../pages/additem.php?items='+$scope.items)
  .success(function(data, status, headers, config) {
    //alert(data);
        //data.substring(0,(data.length-1))
  })
  .error(function(data, status, headers, config) {
    //alert('erreur');
  });
})

.config(function($routeProvider){
		$routeProvider
			.when('/',
			{
				controller:'test',
				templateUrl:'accueil.php',
                //resolve: { wait: 'WaitInit'}
			})
			.when('/checkout',
			{
				controller:'cartController',
				templateUrl:'panier.php',
                //resolve: { wait: 'WaitInit'}
			})
			.when('/error',
			{
				controller:'test',
				templateUrl:'error.php',
                //resolve: { wait: 'WaitInit'}
			})
			.when('/contact',
			{
				controller:'test',
				templateUrl:'contacts.php',
                //resolve: { wait: 'WaitInit'}
			})
			.when('/health',
			{
				controller:'test',
				templateUrl:'health.php',
                //resolve: { wait: 'WaitInit'}
			})
			.when('/article/:nom',
			{
				controller:'articleController',
				templateUrl:'article.php',
                //resolve: { wait: 'WaitInit'}
			})
			.when('/decor',
			{
				controller:'test',
				templateUrl:'decor.php',
                //resolve: { wait: 'WaitInit'}
			})
			.when('/mobile',
			{
				controller:'test',
				templateUrl:'mobile.php',
                //resolve: { wait: 'WaitInit'}
			})
			.when('/produits',
			{
				controller:'test',
				templateUrl:'produit.php',
                //resolve: { wait: 'WaitInit'}
			})
			.otherwise({redirectTo:'/error'})
	})