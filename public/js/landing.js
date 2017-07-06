(function(){

angular.module('a91App')
.config(function($routeProvider, $locationProvider) {
	$routeProvider
	.when('/bemutatkozas', {
		templateUrl: 'bemutatkozas.html',
	})
	.when('/orarend', {
		templateUrl: 'orarend.html',
	})
	.when('/arak', {
		templateUrl: 'arak.html',
	})
	.when('/kapcsolat', {
		templateUrl: 'landingpage.html',
	})
	.when('/belepes', {
		templateUrl: 'belepes.html',
	    /*controller : function(){
	        window.location.replace('/belepes/index.php');
	    }, 
	    template : "<div></div>"*/
		// redirectTo: "/belepes/index.php"
	})
	.otherwise({
		templateUrl: 'landingpage.html'
	});

  // configure html5 to get links working on jsfiddle
  $locationProvider.html5Mode(true);
});

angular.module('a91App').controller('LandingCtrl', ['$scope', '$location', LandingCtrl ]);
function LandingCtrl($scope, $location) {
	var self = this;

	// detect url changes
	$scope.$watch(function(){
		return $location.url();
	}, function(newUrl) {
		// show carousel on main page
		self.carouselVisible = newUrl == '/';
		self.navbarOpened = false;
	});

	self.arak = [
		['1 alaklom',					'1.400.-',	'',			'',			''],
		['A91 4 alkalmas',				'5.200.-',	'',			'',			'30 nap'],
		['A91 6 alkalmas',				'8.100.-',	'',			'',			'90 nap'],
		['A91 8 alkalmas',				'9.600.-',	'6.900.-',	'8.800.-',	'30 nap'],
		['A91 12 alkalmas',				'14.300.-',	'11.650.-',	'13.800.-',	'40 nap'],
		['A91 16 alkalmas',				'18.600.-',	'14.990.-',	'16.900.-',	'60 nap'],
		['A91 Aero.+Cross korlátlan',	'15.850.-',	'12.990.-',	'14.850.-',	'30 nap'],
		['A91 A+C+Bike korlátlan',		'22.350.-',	'19.490.-',	'21.350.-',	'30 nap'],
		['A91 Gym Bronz', 				'61.450.-',	'',			'',			'90 nap'],
		['A91 Gym Gold',				'184.350.-','',			'',			'270 nap'],
		['A91 Gym Silver', 				'122.900.-','',			'',			'180 nap'],
		['A91 Gym Platinum',			'245.850.-','',			'',			'365 nap']
	];

	self.arak2 = [
		['Személyi edzés 1 alkalom',				'3.500.-'],
		['Személyi edzés 4 alkalom',				'11.990.-'],
		['Személyi edzés 8 alkalom',				'23.980.-'],
		['Személyi edzés 12 alkalom',				'35.890.-'],
		['Személyi edzés páros 1 alkalom',			'5.000.-'],
		['Személyi edzés páros 4 alkalom',			'21.490.-'],
		['Személyi edzés páros 8 alkalom',			'44.980.-'],
		['Személyi edzés páros 12 alkalom',			'67.890.-']
	];

	self.arak3 = [
		['Törölköző bérlés és letét',									'400.- + 1000.-'],
		['Gyermekmegőrző 1 éves kortól, minden megkezdett óra után',	'500.-']
	];

	self.altinfo = [
		'Minden bérletet egy személy használhat, nem átruházható!',
		'Csoportos órák hossza 55 perc',
		'Gym 4-8-16-os bérlettel egy csoportos órán való részvétel lehetséges naponta',
		'Havi bérlettel korlátlan csoportos órán lehet részt venni, naponta is',
		'Csoportos órára foglalás csak érvényes bérlettel, vagy a foglalás napjára előre megvásárolt napijeggyel lehetséges',
		'BF-Harness, BF-Iron és BF-Bike órákra a recepción előzetes feliratkozás szükséges, ami az óra előtt 15 percig érvényes, utána érkezési sorrendben tudjuk beengedni a vendégeket. Amennyiben a foglalást nem mondja le az órakezdésig, úgy a rendszer az óra megkezdésekor levonja a bérletéből/napi jegyéből az alkalmat és felszabadítja az Ön helyét. Amennyiben időszakos (1,6 vagy 12 havi bérlete van, akkor a foglalás törlésekor nem alkalmat von le a rendszer, hanem 1 nappal megrövidíti a bérlet időtartamát',
		'Diák kedvezmény: érvényes fényképes nappali tagozatos diákigazolvány felmutatásával vehető igénybe, 22 éves korig',
		'A masszázs, személyi edzés és egyéb extra szolgáltatásaink külön fizetendők',
	];
}

})();
