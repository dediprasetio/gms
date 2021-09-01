/*********************************************************************
 *                               Theme Gauge
 *********************************************************************/
var theme = {
	color: [
		"#26B99A",
		"#34495E",
		"#BDC3C7",
		"#3498DB",
		"#9B59B6",
		"#8abb6f",
		"#759c6a",
		"#bfd3b7",
	],

	title: {
		itemGap: 8,
		textStyle: {
			fontWeight: "normal",
			color: "#408829",
		},
	},

	dataRange: {
		color: ["#1f610a", "#97b58d"],
	},

	toolbox: {
		color: ["#408829", "#408829", "#408829", "#408829"],
	},

	tooltip: {
		backgroundColor: "rgba(0,0,0,0.5)",
		axisPointer: {
			type: "line",
			lineStyle: {
				color: "#408829",
				type: "dashed",
			},
			crossStyle: {
				color: "#408829",
			},
			shadowStyle: {
				color: "rgba(200,200,200,0.3)",
			},
		},
	},

	dataZoom: {
		dataBackgroundColor: "#eee",
		fillerColor: "rgba(64,136,41,0.2)",
		handleColor: "#408829",
	},
	grid: {
		borderWidth: 0,
	},

	categoryAxis: {
		axisLine: {
			lineStyle: {
				color: "#408829",
			},
		},
		splitLine: {
			lineStyle: {
				color: ["#eee"],
			},
		},
	},

	valueAxis: {
		axisLine: {
			lineStyle: {
				color: "#408829",
			},
		},
		splitArea: {
			show: true,
			areaStyle: {
				color: ["rgba(250,250,250,0.1)", "rgba(200,200,200,0.1)"],
			},
		},
		splitLine: {
			lineStyle: {
				color: ["#eee"],
			},
		},
	},
	timeline: {
		lineStyle: {
			color: "#408829",
		},
		controlStyle: {
			normal: { color: "#408829" },
			emphasis: { color: "#408829" },
		},
	},

	k: {
		itemStyle: {
			normal: {
				color: "#68a54a",
				color0: "#a9cba2",
				lineStyle: {
					width: 1,
					color: "#408829",
					color0: "#86b379",
				},
			},
		},
	},
	map: {
		itemStyle: {
			normal: {
				areaStyle: {
					color: "#ddd",
				},
				label: {
					textStyle: {
						color: "#c12e34",
					},
				},
			},
			emphasis: {
				areaStyle: {
					color: "#99d2dd",
				},
				label: {
					textStyle: {
						color: "#c12e34",
					},
				},
			},
		},
	},
	force: {
		itemStyle: {
			normal: {
				linkStyle: {
					strokeColor: "#408829",
				},
			},
		},
	},
	chord: {
		padding: 4,
		itemStyle: {
			normal: {
				lineStyle: {
					width: 1,
					color: "rgba(128, 128, 128, 0.5)",
				},
				chordStyle: {
					lineStyle: {
						width: 1,
						color: "rgba(128, 128, 128, 0.5)",
					},
				},
			},
			emphasis: {
				lineStyle: {
					width: 1,
					color: "rgba(128, 128, 128, 0.5)",
				},
				chordStyle: {
					lineStyle: {
						width: 1,
						color: "rgba(128, 128, 128, 0.5)",
					},
				},
			},
		},
	},
	gauge: {
		startAngle: 225,
		endAngle: -45,
		axisLine: {
			show: true,
			lineStyle: {
				color: [
					[0.2, "#86b379"],
					[0.8, "#68a54a"],
					[1, "#408829"],
				],
				width: 8,
			},
		},
		axisTick: {
			splitNumber: 10,
			length: 12,
			lineStyle: {
				color: "auto",
			},
		},
		axisLabel: {
			textStyle: {
				color: "auto",
			},
		},
		splitLine: {
			length: 18,
			lineStyle: {
				color: "auto",
			},
		},
		pointer: {
			length: "90%",
			color: "auto",
		},
		title: {
			textStyle: {
				color: "#333",
			},
		},
		detail: {
			textStyle: {
				color: "auto",
			},
		},
	},
	textStyle: {
		fontFamily: "Arial, Verdana, sans-serif",
	},
};

/*********************************************************************
 *                               Echart Color Gauge
 *********************************************************************/
var color_echart_gauge_amphere = [
	[0.20, "lightgreen"],
	[0.5, "skyblue"],
	[0.80, "orange"],
	[1, "#ff4500"],
];

var color_echart_gauge_voltage = [
	[0.3, "#ff4500"], //200
	[0.55, "orange"], //220
	[0.67, "lightgreen"],
	[1, "skyblue"],
];

/*********************************************************************
 *                        ECHART INIT VOLTAGE
 *********************************************************************/
/*----------------------------AMPHERE-------------------------------*/
var eChartV4 = document.getElementById("echarts_amphere_1");
var echartGaugeAmpR = echarts.init(eChartV4, theme);
var optionAmphereR = {
	tooltip: {
		formatter: "{a} <br/>{b} : {c}%",
	},
	toolbox: {
		show: false,
	},
	series: [
		{
			name: "",
			progress: true,
			type: "gauge",
			center: ["50%", "50%"],
			startAngle: 220,
			endAngle: -40,
			min: 0,
			max: 100,
			precision: 0,
			splitNumber: 10,
			axisLine: {
				show: true,
				lineStyle: {
					color: color_echart_gauge_amphere,
					width: 20,
				},
			},
			axisTick: {
				show: true,
				splitNumber: 5,
				length: 8,
				lineStyle: {
					color: "#eee",
					width: 1,
					type: "solid",
				},
			},
			axisLabel: {
				show: true,
				formatter: function (v) {
					// switch (v + '') {
					//     case '0':
					//         return '0';
					//     case '20':
					//         return '4';
					//     case '50':
					//         return '8';
					//     case '80':
					//         return '12';
					//     case '100':
					//         return '16';
					//     default:
					//         return '';
					// }
					switch (v + "") {
						case "0":
							return "0";
						case "20":
							return "0.20";
						case "50":
							return "0.50";
						case "80":
							return "0.70";
						case "100":
							return "1";
						default:
							return "";
					}
				},
				textStyle: {
					color: "#333",
					fontSize: 8,
				},
			},
			splitLine: {
				show: true,
				length: 20,
				lineStyle: {
					color: "#eee",
					width: 2,
					type: "solid",
				},
			},
			pointer: {
				length: "80%",
				width: 8,
				color: "auto",
			},
			title: {
				show: true,
				offsetCenter: ["0%", 45],
				textStyle: {
					color: "#333",
					fontSize: 12,
				},
			},
			detail: {
				show: true,
				valueAnimation: true,
				backgroundColor: "rgba(0,0,0,0)",
				borderWidth: 0,
				borderColor: "#ccc",
				width: 100,
				height: 40,
				offsetCenter: ["0%", 65],
				formatter: "0 Amp",
				textStyle: {
					color: "auto",
					fontSize: 18,
					color: "black",
				},
			},
			data: [
				{
					value: 0,
					name: "PHASE R",
				},
			],
		},
	],
};
echartGaugeAmpR.setOption(optionAmphereR, true);

var eChartV5 = document.getElementById("echarts_amphere_2");
var echartGaugeAmpS = echarts.init(eChartV5, theme);
var optionAmphereS = {
	tooltip: {
		formatter: "{a} <br/>{b} : {c}%",
	},
	toolbox: {
		show: false,
	},
	series: [
		{
			name: "",
			progress: true,
			type: "gauge",
			center: ["50%", "50%"],
			startAngle: 220,
			endAngle: -40,
			min: 0,
			max: 100,
			precision: 0,
			splitNumber: 10,
			axisLine: {
				show: true,
				lineStyle: {
					color: color_echart_gauge_amphere,
					width: 20,
				},
			},
			axisTick: {
				show: true,
				splitNumber: 5,
				length: 8,
				lineStyle: {
					color: "#eee",
					width: 1,
					type: "solid",
				},
			},
			axisLabel: {
				show: true,
				formatter: function (v) {
					// switch (v + '') {
					//     case '0':
					//         return '0';
					//     case '20':
					//         return '4';
					//     case '50':
					//         return '8';
					//     case '80':
					//         return '12';
					//     case '100':
					//         return '16';
					//     default:
					//         return '';
					// }
					switch (v + "") {
						case "0":
							return "0";
						case "20":
							return "1";
						case "50":
							return "2";
						case "80":
							return "3";
						case "100":
							return "4";
						default:
							return "";
					}
				},
				textStyle: {
					color: "#333",
					fontSize: 8,
				},
			},
			splitLine: {
				show: true,
				length: 20,
				lineStyle: {
					color: "#eee",
					width: 2,
					type: "solid",
				},
			},
			pointer: {
				length: "80%",
				width: 8,
				color: "auto",
			},
			title: {
				show: true,
				offsetCenter: ["0%", 45],
				textStyle: {
					color: "#333",
					fontSize: 12,
				},
			},
			detail: {
				show: true,
				valueAnimation: true,
				backgroundColor: "rgba(0,0,0,0)",
				borderWidth: 0,
				borderColor: "#ccc",
				width: 100,
				height: 40,
				offsetCenter: ["0%", 65],
				formatter: "0 Amp",
				textStyle: {
					color: "auto",
					fontSize: 18,
					color: "black",
				},
			},
			data: [
				{
					value: 0,
					name: "PHASE S",
				},
			],
		},
	],
};
echartGaugeAmpS.setOption(optionAmphereS, true);

var eChartV6 = document.getElementById("echarts_amphere_3");
var echartGaugeAmpT = echarts.init(eChartV6, theme);
var optionAmphereT = {
	tooltip: {
		formatter: "{a} <br/>{b} : {c}%",
	},
	toolbox: {
		show: false,
	},
	series: [
		{
			name: "",
			progress: true,
			type: "gauge",
			center: ["50%", "50%"],
			startAngle: 220,
			endAngle: -40,
			min: 0,
			max: 100,
			precision: 0,
			splitNumber: 10,
			axisLine: {
				show: true,
				lineStyle: {
					color: color_echart_gauge_amphere,
					width: 20,
				},
			},
			axisTick: {
				show: true,
				splitNumber: 5,
				length: 8,
				lineStyle: {
					color: "#eee",
					width: 1,
					type: "solid",
				},
			},
			axisLabel: {
				show: true,
				formatter: function (v) {
					// switch (v + '') {
					//     case '0':
					//         return '0';
					//     case '20':
					//         return '4';
					//     case '50':
					//         return '8';
					//     case '80':
					//         return '12';
					//     case '100':
					//         return '16';
					//     default:
					//         return '';
					// }
					switch (v + "") {
						case "0":
							return "0";
						case "20":
							return "1";
						case "50":
							return "2";
						case "80":
							return "3";
						case "100":
							return "4";
						default:
							return "";
					}
				},
				textStyle: {
					color: "#333",
					fontSize: 8,
				},
			},
			splitLine: {
				show: true,
				length: 20,
				lineStyle: {
					color: "#eee",
					width: 2,
					type: "solid",
				},
			},
			pointer: {
				length: "80%",
				width: 8,
				color: "auto",
			},
			title: {
				show: true,
				offsetCenter: ["0%", 45],
				textStyle: {
					color: "#333",
					fontSize: 12,
				},
			},
			detail: {
				show: true,
				valueAnimation: true,
				backgroundColor: "rgba(0,0,0,0)",
				borderWidth: 0,
				borderColor: "#ccc",
				width: 100,
				height: 40,
				offsetCenter: ["0%", 65],
				formatter: "0 Amp",
				textStyle: {
					color: "auto",
					fontSize: 18,
					color: "black",
				},
			},
			data: [
				{
					value: 0,
					name: "PHASE T",
				},
			],
		},
	],
};
echartGaugeAmpT.setOption(optionAmphereT, true);

/*---------------------------AMPHERE LINE-----------------------------*/
var nd = new Date().getTime();
var highchartLineAmphere;
var highchartLineVoltage;

function highchartLineAmp(rowData) {
	highchartLineAmphere = new Highcharts.Chart({
		chart: {
			renderTo: "amphereLine",
		},
	
		title: {
			text: "Live Amphere Data",
			enabled: false,
		},
	
		accessibility: {
			announceNewData: {
				enabled: false,
				minAnnounceInterval: 15000,
				announcementFormatter: function (allSeries, newSeries, newPoint) {
					if (newPoint) {
						return "New point added. Value: " + newPoint.y;
					}
					return false;
				},
			},
		},
	
		time: {
			useUTC: false,
		},
	
		exporting: {
			enabled: false,
		},
	
		xAxis: {
			type: "datetime",
			tickInterval: 15000,
			labels: {
				format: '{value:%H:%M:%S}'
			  },
		},
		colors: ['#FF2400', '#FFCC00', '#000084'],
	
		series: [
			{
				name: 'Phase R',
				data: (function() {
					// generate an array of random data
					var data = [],
						time = (new Date()).getTime(),
						i;
	
						for (i = -4; i <= 0; i++) {
							data.push({
								x: time + (i*15) * 1000,
								y: parseFloat(rowData.PHASE_R[0].Current)
							});
						}
					return data;
				})(),
			},
			{
				name: 'Phase S',
				data: (function() {
					// generate an array of random data
					var data = [],
						time = (new Date()).getTime(),
						i;

						for (i = -4; i <= 0; i++) {
							data.push({
								x: time + (i*15) * 1000,
								y: parseFloat(rowData.PHASE_S[0].Current)
							});
						}
					return data;
				})(),
			},
			{
				name: 'Phase T',
				data: (function() {
					// generate an array of random data
					var data = [],
						time = (new Date()).getTime(),
						i;

						for (i = -4; i <= 0; i++) {
							// console.log(rowData.PHASE_R[0].Current);
							data.push({
								x: time + (i*15) * 1000,
								y: parseFloat(rowData.PHASE_T[0].Current)
							});
						}
	
						// $.each(rowData.PHASE_T, function (key, value) {
						// 	data.push({
						// 		x: (new Date(value.effective_date)).getTime(),
						// 		y: value.Current
						// 	});
						// });
					return data;
				})(),
			},
		],
	});
}

function highchartLineVolt(rowData) {
	highchartLineVoltage = new Highcharts.Chart({
		chart: {
			renderTo: "voltageLine",
		},
	
		title: {
			text: "Live Amphere Data",
			enabled: false,
		},
	
		accessibility: {
			announceNewData: {
				enabled: false,
				minAnnounceInterval: 15000,
				announcementFormatter: function (allSeries, newSeries, newPoint) {
					if (newPoint) {
						return "New point added. Value: " + newPoint.y;
					}
					return false;
				},
			},
		},
	
		time: {
			useUTC: false,
		},
	
		exporting: {
			enabled: false,
		},
	
		xAxis: {
			type: "datetime",
			tickInterval: 15000,
			labels: {
				format: '{value:%H:%M:%S}'
			  },
		},
		colors: ['#FF2400', '#FFCC00', '#000084'],
	
		series: [
			{
				name: 'Phase R',
				data: (function() {
					// generate an array of random data
					var data = [],
						time = (new Date()).getTime(),
						i;
	
						for (i = -4; i <= 0; i++) {
							data.push({
								x: time + (i*15) * 1000,
								y: parseFloat(rowData.PHASE_R[0].Voltage)
							});
						}
					return data;
				})(),
			},
			{
				name: 'Phase S',
				data: (function() {
					// generate an array of random data
					var data = [],
						time = (new Date()).getTime(),
						i;

						for (i = -4; i <= 0; i++) {
							data.push({
								x: time + (i*15) * 1000,
								y: parseFloat(rowData.PHASE_S[0].Voltage)
							});
						}
					return data;
				})(),
			},
			{
				name: 'Phase T',
				data: (function() {
					// generate an array of random data
					var data = [],
						time = (new Date()).getTime(),
						i;

						for (i = -4; i <= 0; i++) {
							// console.log(rowData.PHASE_R[0].Current);
							data.push({
								x: time + (i*15) * 1000,
								y: parseFloat(rowData.PHASE_T[0].Voltage)
							});
						}
					return data;
				})(),
			},
		],
	});
}

/*----------------------------VOLTAGE-------------------------------*/
var eChartV1 = document.getElementById("echarts_voltage_1");
var echartGaugeR = echarts.init(eChartV1, theme);
var optionVoltagerR = {
	tooltip: {
		formatter: "{a} <br/>{b} : {c}%",
	},
	toolbox: {
		show: false,
	},
	series: [
		{
			name: "",
			progress: true,
			type: "gauge",
			center: ["50%", "50%"],
			startAngle: 220,
			endAngle: -40,
			min: 0,
			max: 100,
			precision: 0,
			splitNumber: 10,
			axisLine: {
				show: true,
				lineStyle: {
					color: color_echart_gauge_voltage,
					width: 20,
				},
			},
			axisTick: {
				show: true,
				splitNumber: 5,
				length: 8,
				lineStyle: {
					color: "#eee",
					width: 1,
					type: "solid",
				},
			},
			axisLabel: {
				show: true,
				formatter: function (v) {
					switch (v + "") {
						case "0":
							return "0";
						case "20":
							return "90";
						case "50":
							return "180";
						case "80":
							return "270";
						case "100":
							return "360";
						default:
							return "";
					}
				},
				textStyle: {
					color: "#333",
					fontSize: 8,
				},
			},
			splitLine: {
				show: true,
				length: 20,
				lineStyle: {
					color: "#eee",
					width: 2,
					type: "solid",
				},
			},
			pointer: {
				length: "80%",
				width: 8,
				color: "auto",
			},
			title: {
				show: true,
				offsetCenter: ["0%", 45],
				textStyle: {
					color: "#333",
					fontSize: 12,
				},
			},
			detail: {
				show: true,
				valueAnimation: true,
				backgroundColor: "rgba(0,0,0,0)",
				borderWidth: 0,
				borderColor: "#ccc",
				width: 100,
				height: 40,
				offsetCenter: ["0%", 65],
				formatter: "0 Amp",
				textStyle: {
					color: "black",
					fontSize: 18,
				},
			},
			data: [
				{
					value: 0,
					name: "PHASE R",
				},
			],
		},
	],
};
echartGaugeR.setOption(optionVoltagerR, true);

var eChartV2 = document.getElementById("echarts_voltage_2");
var echartGaugeS = echarts.init(eChartV2, theme);
var optionVoltageS = {
	tooltip: {
		formatter: "{a} <br/>{b} : {c}%",
	},
	toolbox: {
		show: false,
	},
	series: [
		{
			name: "",
			progress: true,
			type: "gauge",
			center: ["50%", "50%"],
			startAngle: 220,
			endAngle: -40,
			min: 0,
			max: 100,
			precision: 0,
			splitNumber: 10,
			axisLine: {
				show: true,
				lineStyle: {
					color: color_echart_gauge_voltage,
					width: 20,
				},
			},
			axisTick: {
				show: true,
				splitNumber: 5,
				length: 8,
				lineStyle: {
					color: "#eee",
					width: 1,
					type: "solid",
				},
			},
			axisLabel: {
				show: true,
				formatter: function (v) {
					switch (v + "") {
						case "0":
							return "0";
						case "20":
							return "90";
						case "50":
							return "180";
						case "80":
							return "270";
						case "100":
							return "360";
						default:
							return "";
					}
				},
				textStyle: {
					color: "#333",
					fontSize: 8,
				},
			},
			splitLine: {
				show: true,
				length: 20,
				lineStyle: {
					color: "#eee",
					width: 2,
					type: "solid",
				},
			},
			pointer: {
				length: "80%",
				width: 8,
				color: "auto",
			},
			title: {
				show: true,
				offsetCenter: ["0%", 45],
				textStyle: {
					color: "#333",
					fontSize: 12,
				},
			},
			detail: {
				show: true,
				valueAnimation: true,
				backgroundColor: "rgba(0,0,0,0)",
				borderWidth: 0,
				borderColor: "#ccc",
				width: 100,
				height: 40,
				offsetCenter: ["0%", 65],
				formatter: "0 Amp",
				textStyle: {
					color: "black",
					fontSize: 18,
				},
			},
			data: [
				{
					value: 0,
					name: "PHASE S",
				},
			],
		},
	],
};
echartGaugeS.setOption(optionVoltageS, true);

var eChartV3 = document.getElementById("echarts_voltage_3");
var echartGaugeT = echarts.init(eChartV3, theme);
var optionVoltageT = {
	tooltip: {
		formatter: "{a} <br/>{b} : {c}%",
	},
	toolbox: {
		show: false,
	},
	series: [
		{
			name: "",
			progress: true,
			type: "gauge",
			center: ["50%", "50%"],
			startAngle: 220,
			endAngle: -40,
			min: 0,
			max: 100,
			precision: 0,
			splitNumber: 10,
			axisLine: {
				show: true,
				lineStyle: {
					color: color_echart_gauge_voltage,
					width: 20,
				},
			},
			axisTick: {
				show: true,
				splitNumber: 5,
				length: 8,
				lineStyle: {
					color: "#eee",
					width: 1,
					type: "solid",
				},
			},
			axisLabel: {
				show: true,
				formatter: function (v) {
					switch (v + "") {
						case "0":
							return "0";
						case "20":
							return "90";
						case "50":
							return "180";
						case "80":
							return "270";
						case "100":
							return "360";
						default:
							return "";
					}
				},
				textStyle: {
					color: "#333",
					fontSize: 8,
				},
			},
			splitLine: {
				show: true,
				length: 20,
				lineStyle: {
					color: "#eee",
					width: 2,
					type: "solid",
				},
			},
			pointer: {
				length: "80%",
				width: 8,
				color: "auto",
			},
			title: {
				show: true,
				offsetCenter: ["0%", 45],
				textStyle: {
					color: "#333",
					fontSize: 12,
				},
			},
			detail: {
				show: true,
				valueAnimation: true,
				backgroundColor: "rgba(0,0,0,0)",
				borderWidth: 0,
				borderColor: "#ccc",
				width: 100,
				height: 40,
				offsetCenter: ["0%", 65],
				formatter: "0 Amp",
				textStyle: {
					color: "black",
					fontSize: 18,
				},
			},
			data: [
				{
					value: 0,
					name: "PHASE T",
				},
			],
		},
	],
};
echartGaugeT.setOption(optionVoltageT, true);

/*********************************************************************
 *                         Echart Update
 *********************************************************************/
/*----------------------------AMPHERE-------------------------------*/
function updateChartAmphereR(valueData, formatterLabel, curentData) {
	if (curentData != valueData) {
		optionAmphereR.series[0].data[0].value = valueData * 100;
		optionAmphereR.series[0].detail.formatter =
			valueData + " " + formatterLabel;

		echartGaugeAmpR.setOption(optionAmphereR, true);
	}
}

function updateChartAmphereS(valueData, formatterLabel, curentData) {
	if (curentData != valueData) {
		optionAmphereS.series[0].data[0].value = (valueData * 100) / 360;
		optionAmphereS.series[0].detail.formatter =
			valueData + " " + formatterLabel;

		echartGaugeAmpS.setOption(optionAmphereS, true);
	}
}

function updateChartAmphereT(valueData, formatterLabel, curentData) {
	if (curentData != valueData) {
		optionAmphereT.series[0].data[0].value = (valueData * 100) / 360;
		optionAmphereT.series[0].detail.formatter =
			valueData + " " + formatterLabel;

		echartGaugeAmpT.setOption(optionAmphereT, true);
	}
}

/*----------------------------VOLTAGE-------------------------------*/
function updateChartVoltageR(valueData, formatterLabel, curentData) {
	if (curentData != valueData) {
		optionVoltagerR.series[0].data[0].value = (valueData * 100) / 360;
		optionVoltagerR.series[0].detail.formatter =
			valueData + " " + formatterLabel;

		echartGaugeR.setOption(optionVoltagerR, true);
	}
}

function updateChartVoltageS(valueData, formatterLabel, curentData) {
	if (curentData != valueData) {
		optionVoltageS.series[0].data[0].value = (valueData * 100) / 360;
		optionVoltageS.series[0].detail.formatter =
			valueData + " " + formatterLabel;

		echartGaugeS.setOption(optionVoltageS, true);
	}
}

function updateChartVoltageT(valueData, formatterLabel, curentData) {
	if (curentData != valueData) {
		optionVoltageT.series[0].data[0].value = (valueData * 100) / 360;
		optionVoltageT.series[0].detail.formatter =
			valueData + " " + formatterLabel;

		echartGaugeT.setOption(optionVoltageT, true);
	}
}

/**
 * Axios long-polling
 *
 * 1. sends a request to the server (without a timestamp parameter)
 * 2. waits for an answer from server.php (which can take forever)
 * 3. if server.php responds (whenever), put data_from_file into #response
 * 4. and call the function again
 *
 * @param timestamp
 */
var dataAmphereR = 0;
var dataAmphereS = 0;
var dataAmphereT = 0;
var dataVoltageR = 0;
var dataVoltageS = 0;
var dataVoltageT = 0;
// var initialize = 0;

function getPowerData(timestamp, initialize = 0) {
	//  var queryString = {'timestamp' : timestamp};
	const headers = {
		'Content-Type': 'application/json',
		'Authorization': sessionStorage.getItem("token")
	}
	axios.post(base_url + "api/power/all-power", {
		'timestamp': timestamp,
		'initialize': initialize
	}, {
		  headers: headers
		})
		.then((res) => {
			var powerData = res.data.data.listrik;
			var rowData = res.data.data.datarow;
            var x = (new Date()).getTime();

		/**********************************************************************************************************************************
                                                            UPDATE AMPHERE
        **********************************************************************************************************************************/
			try {
				//CHART
				updateChartAmphereR(powerData.PHASE_R.Current, "Amp", dataAmphereR);
				updateChartAmphereS(powerData.PHASE_S.Current, "Amp", dataAmphereS);
				updateChartAmphereT(powerData.PHASE_T.Current, "Amp", dataAmphereT);
				if(initialize == 0){
					highchartLineAmp(rowData);
					highchartLineVolt(rowData);
				}else{
					var x = (new Date()).getTime()
					highchartLineAmphere.series[0].addPoint([x, parseFloat(rowData.PHASE_R[0].Current)], false, true);
					highchartLineAmphere.series[1].addPoint([x, parseFloat(rowData.PHASE_S[0].Current)], false, true);
					highchartLineAmphere.series[2].addPoint([x, parseFloat(rowData.PHASE_T[0].Current)], true, true);
					highchartLineVoltage.series[0].addPoint([x, parseFloat(rowData.PHASE_R[0].Voltage)], false, true);
					highchartLineVoltage.series[1].addPoint([x, parseFloat(rowData.PHASE_S[0].Voltage)], false, true);
					highchartLineVoltage.series[2].addPoint([x, parseFloat(rowData.PHASE_T[0].Voltage)], true, true);
				}
				// initialize = 1;

				//USAGE & STATUS
				$("#ampUsageR").html(percentageAmphereUsage(powerData.PHASE_R.Current));
				$("#ampUsageS").html(percentageAmphereUsage(powerData.PHASE_S.Current));
				$("#ampUsageT").html(percentageAmphereUsage(powerData.PHASE_T.Current));

				$("#statusAmpUsageR").html(amphereStatus(powerData.PHASE_R.Current));
				$("#statusAmpUsageS").html(amphereStatus(powerData.PHASE_S.Current));
				$("#statusAmpUsageT").html(amphereStatus(powerData.PHASE_T.Current));
			} catch (error) {
				console.log(error);
			}

		/**********************************************************************************************************************************
                                                            UPDATE VOLTAGE
        **********************************************************************************************************************************/
			try {
				updateChartVoltageR(powerData.PHASE_R.Voltage, "Volt", dataVoltageR);
				updateChartVoltageS(powerData.PHASE_S.Voltage, "Volt", dataVoltageS);
				updateChartVoltageT(powerData.PHASE_T.Voltage, "Volt", dataVoltageT);

				//USAGE & STATUS
				$("#VoltUsageR").html(
					percentageVoltageUsage(powerData.PHASE_R.Voltage)
				);
				$("#VoltUsageS").html(
					percentageVoltageUsage(powerData.PHASE_S.Voltage)
				);
				$("#VoltUsageT").html(
					percentageVoltageUsage(powerData.PHASE_T.Voltage)
				);

				$("#statusVoltUsageR").html(voltageStatus(powerData.PHASE_R.Voltage));
				$("#statusVoltUsageS").html(voltageStatus(powerData.PHASE_S.Voltage));
				$("#statusVoltUsageT").html(voltageStatus(powerData.PHASE_T.Voltage));
			} catch (error) {
				console.log(error);
			}

			//Initialize Curent Data
			dataAmphereR = powerData.PHASE_R.Current;
			dataAmphereS = powerData.PHASE_S.Current;
			dataAmphereT = powerData.PHASE_T.Current;
			dataVoltageR = powerData.PHASE_R.Voltage;
			dataVoltageS = powerData.PHASE_S.Voltage;
			dataVoltageT = powerData.PHASE_T.Voltage;

			setTimeout(function () {
				getPowerData(res.data.effective_date, 1);
			}, timeoutFunction);
		})
		.catch(function (error) {
			setTimeout(function () {
				getPowerData(res.data.effective_date, 1);
			}, timeoutFunction);
			console.log(error);
			// notify('top', 'right', 'fa fa-check', 'danger', 'animated fadeInDown', 'animated fadeOutDown', error.response.data.message);
		});
}

/*******************************************************************************
                                    CHILLER
********************************************************************************/
var initializeChillerStatus = false;
const getChiller = async (timestamp = 0) => {
	try {
		const resp = axios
			.get(base_url + "api/chiller", {
				headers: {
					"Content-Type": "application/x-www-form-urlencoded",
					Authorization: sessionStorage.getItem("token"),
				},
				params: {
					timestamp: timestamp,
				},
				timeout: timeoutRequest,
			})
			.then(function (res) {
				var response = res.data.data;
				response.forEach(function callback(element, index, array) {
					if (initializeChillerStatus == false) {
						initializeChiller(
							element.uniq_id,
							element.name,
							element.tool_brand,
							element.value
						);
					} else {
						updateToolStatus(element.uniq_id, element.value);
					}
				});

				initializeChillerStatus = true;
				setTimeout(function () {
					getChiller();
				}, timeoutFunction);
			})
			.catch(function (error) {
				setTimeout(function () {
					getChiller();
				}, timeoutFunction);
				console.log(error);
				// notify('top', 'right', 'fa fa-check', 'danger', 'animated fadeInDown', 'animated fadeOutDown', error.response.data.message);
			});
	} catch (err) {
		// Handle Error Here
		console.error(err);
	}
};

/*******************************************************************************
                                    FREEZER
********************************************************************************/
var initializeFreezerStatus = false;
const getFreezer = async (timestamp = 0) => {
	try {
		const resp = axios
			.get(base_url + "api/freezer", {
				headers: {
					"Content-Type": "application/x-www-form-urlencoded",
					Authorization: sessionStorage.getItem("token"),
				},
				params: {
					timestamp: timestamp,
				},
				timeout: timeoutRequest,
			})
			.then(function (res) {
				var response = res.data.data;
				response.forEach(function callback(element, index, array) {
					if (initializeFreezerStatus == false) {
						initializeFreezer(
							element.uniq_id,
							element.name,
							element.tool_brand,
							element.value
						);
					} else {
						updateToolStatus(element.uniq_id, element.value);
					}
				});

				initializeFreezerStatus = true;
				setTimeout(function () {
					getFreezer();
				}, timeoutFunction);
			})
			.catch(function (error) {
				setTimeout(function () {
					getFreezer();
				}, timeoutFunction);
				console.log(error);
				// notify('top', 'right', 'fa fa-check', 'danger', 'animated fadeInDown', 'animated fadeOutDown', error);
			});
	} catch (err) {
		// Handle Error Here
		console.error(err);
	}
};

/*******************************************************************************
                                    TEMPERATURE
********************************************************************************/
var initializeTemperatureStatus = false;
const getTemperature = async (timestamp = 0) => {
	try {
		const resp = axios
			.get(base_url + "api/temperature", {
				headers: {
					"Content-Type": "application/x-www-form-urlencoded",
					Authorization: sessionStorage.getItem("token"),
				},
				params: {
					timestamp: timestamp,
				},
				timeout: timeoutRequest,
			})
			.then(function (res) {
				var response = res.data.data;
				response.forEach(function callback(element, index, array) {
					if (initializeTemperatureStatus == false) {
						initializeTemperature(
							element.uniq_id,
							element.name,
							element.tool_brand,
							element.value
						);
					} else {
						updateToolStatusTemperature(element.uniq_id, element.value);
					}
				});

				initializeTemperatureStatus = true;
				setTimeout(function () {
					getTemperature();
				}, timeoutFunction);
			})
			.catch(function (error) {
				setTimeout(function () {
					getTemperature();
				}, timeoutFunction);
				console.log(error);
				// notify('top', 'right', 'fa fa-check', 'danger', 'animated fadeInDown', 'animated fadeOutDown', error);
			});
	} catch (err) {
		// Handle Error Here
		console.error(err);
	}
};

function init_switch() {
	if ($(".switch-cashier-1")[0]) {
		var elems = Array.prototype.slice.call(
			document.querySelectorAll(".switch-cashier-1")
		);
		elems.forEach(function (html) {
			var switchery = new Switchery(html, {
				color: "#26B99A",
			});
		});
	}
}

/*******************************************************************************
                                INITIALIZE HTML
--------------------------------------------------------------------------------
* name : name chiller on site/booth
* brand : brand
* value : status chiller on booth
********************************************************************************/
function initializeChiller(uniqId, name, brand, value) {
	var status =
		'<p class="mt-2 text-info">Status : <span class="badge badge-success "> ON </span></p>';
	var valueId = `value-${uniqId}`;
	if (value == 0) {
		status =
			'<p class="mt-2 text-danger">Status : <span class="badge badge-danger"> OFF </span></p>';
	}
	$("#card-chiller").append(
		`<div class="col-lg-3 col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="row">
                        <div class="col-lg-12 col-md-3 col-sm-6 mt-2">
                            <div class="card text-center p-1 border-none-mobile">
                                <div class="row">
                                    <div class="col-12 text-secondary"><b>${name}</b></div>
                                    <hr>
                                    <div class="col-4 item-center mt-1">
                                        <img src="${base_url}public/images/icon/chiller-slim.png" style="width: 40px;">
                                    </div>
                                    <div class="col-8 item-left mt-1">
                                        <div id="lamp` +
			uniqId +
			`">
                                            <img src="${base_url}public/images/icon/rotator-lamp-on.png" width="35" alt="">
                                        </div>
                                        <div id="status` +
			uniqId +
			`">
                                            ${status}
                                        </div>
                                        <p class="text-info" id="${valueId}">${value}&ordm; C</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`
	);
}

function initializeFreezer(uniqId, name, brand, value) {
	var status =
		'<p class="mt-2 text-info">Status: <span class="badge badge-success "> ON </span></p>';
	var lampIconImage = "rotator-lamp-on.png";
	var valueId = `value-${uniqId}`;
	if (value == 0) {
		status =
			'<p class="mt-2 text-danger">Status: <span class="badge badge-danger"> OFF </span></p>';
		lampIconImage = "rotator-lamp-off.png";
	}
	$("#card-freezer").append(`<div class="col-lg-3 col-md-12 col-sm-12  ">
                                <div class="x_panel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-3 col-sm-6 mt-2">
                                            <div class="card text-center p-1 border-none-mobile">
                                                <div class="row">
                                                    <div class="col-12 text-secondary"><b>${name}</b></div>
                                                    <hr>
                                                    <div class="col-4 item-center mt-1" >
                                                        <img src="${base_url}public/images/icon/freezer.png" style="width: 40px;">
                                                    </div>
                                                    <div class="col-8 item-left mt-1">
                                                        <img src="${base_url}public/images/icon/${lampIconImage}" width="35" alt="">
                                                        ${status}
                                                        <p class="text-info" id="${valueId}">${value}&ordm; C</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`);
}

function initializeTemperature(uniqId, name, brand, value) {
	var status =
		'<p class="mt-2 text-info">Status: <span class="badge badge-success "> ON </span></p>';
	var lampIconImage = "rotator-lamp-on.png";
	if (value == 0) {
		status =
			'<p class="mt-2 text-danger">Status: <span class="badge badge-danger"> OFF </span></p>';
		lampIconImage = "rotator-lamp-off.png";
	}
	$("#card-temperature").append(
		`<div class="col-lg-4 col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="row">
                <div class="col-lg-12 col-md-3 col-sm-6 mt-2">
                    <div class="card text-center p-1 border-none-mobile">
                        <div class="row">
                            <div class="col-12 black-text text-uppercase active-2"><h6><b>${name}</b></h6></div>
                            <hr>
                            <div class="col-4 item-center mt-1">
                                <img src="${base_url}public/images/icon/temperature.png" style="width: 35px;">
                            </div>
                            <div class="col-8 item-left mt-1">
                                <div id="lamp` +
			uniqId +
			`">
                                    <img src="${base_url}public/images/icon/${lampIconImage}" width="35" alt="">
                                </div>
                                <div id="status` +
			uniqId +
			`">
                                    ${status}
                                </div>
                                <div id="temperature` +
			uniqId +
			`">
                                    <p class="text-info">AC ${value}&ordm; C</p>
                                </div>
                                <p class="text-info">${brand.toUpperCase()}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`
	);
}
/*******************************************************************************
                                UPDATE TOOL
********************************************************************************/
function updateToolStatus(uniqId, value) {
	var lampId = "#lamp" + uniqId;
	var valueId = `#value-${uniqId}`;
	var statusId = "#status" + uniqId;
	var lampIconImage = `<img src="${base_url}public/images/icon/rotator-lamp-on.png" width="35" alt="">`;
	var status =
		'<p class="mt-2 text-info">Status : <span class="badge badge-success "> ON </span></p>';
	if (value == 0) {
		status =
			'<p class="mt-2 text-danger">Status : <span class="badge badge-danger"> OFF </span></p>';
		lampIconImage = `<img src="${base_url}public/images/icon/rotator-lamp-off.png" width="35" alt="">`;
	}
	$(lampId).html(lampIconImage);
	$(statusId).html(status);
	$(valueId).html(`${value}&ordm; C`);
}

function updateToolStatusTemperature(uniqId, value) {
	var lampId = "#lamp" + uniqId;
	var statusId = "#status" + uniqId;
	var temperatureId = "#temperature" + uniqId;
	var lampIconImage = `<img src="${base_url}public/images/icon/rotator-lamp-on.png" width="35" alt="">`;
	var status =
		'<p class="mt-2 text-info">Status : <span class="badge badge-success "> ON </span></p>';
	if (value == 0) {
		status =
			'<p class="mt-2 text-danger">Status : <span class="badge badge-danger"> OFF </span></p>';
		lampIconImage = `<img src="${base_url}public/images/icon/rotator-lamp-off.png" width="35" alt="">`;
	}
	$(lampId).html(lampIconImage);
	$(statusId).html(status);
	$(temperatureId).html(`<p class="text-info">AC ${value}&ordm; C</p>`);
}

/*******************************************************************************
                                    FORMULA
********************************************************************************/
function percentageAmphereUsage(value) {
	var percentage = (value * 100) / 16;
	return Math.ceil(percentage) + " %";
}

function percentageVoltageUsage(value) {
	var percentage = (value * 100) / 240;
	return Math.ceil(percentage) + " %";
}

function amphereStatus(value) {
	if (value <= 12) {
		// return '<p class="text-small text-success">good</p>';
		return '<span class="badge badge-success pl-3 pr-3 pt-1 pb-1"> GOOD </span>';
	} else {
		return '<span class="badge badge-danger pl-3 pr-3 pt-1 pb-1"> DANGER </span>';
	}
}

function voltageStatus(value) {
	if (value >= 220) {
		return '<span class="badge badge-success pl-3 pr-3 pt-1 pb-1"> GOOD </span>';
	} else if (value >= 200) {
		return '<span class="badge badge-warning pl-3 pr-3 pt-1 pb-1"> GOOD </span>';
	} else {
		return '<span class="badge badge-danger pl-3 pr-3 pt-1 pb-1"> GOOD </span>';
	}
}

$(document).ready(function () {
	// init_amphere();
	// sendGetRequest();
	getPowerData();
	getChiller();
	getFreezer();
	getTemperature();
});

// setInterval(() => {
//     try {
// 		var x = (new Date()).getTime()
//     highchart.series[0].addPoint([x, 12], false, true);
//     highchart.series[1].addPoint([x, 9], false, true);
//     highchart.series[2].addPoint([x, 5], true, true);
// 	} catch (error) {
// 		console.log(error);
// 	}
// }, 1000)

function convertTZ(date) {
	return new Date(
		(typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {
			timeZone: "Asia/Jakarta",
		})
	);
}
