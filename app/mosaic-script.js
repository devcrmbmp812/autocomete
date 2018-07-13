var shouldFire, Gallery;

var recalculate = function () {
	var picMaxWidth = (window.innerWidth - (4 * 4)) / 4;
	Array.prototype.slice.call(document.querySelectorAll("span > a > img")).forEach(function (node) {
		node.style.width = picMaxWidth + "px";
		node.style.height = picMaxWidth + "px";
	});
	Array.prototype.slice.call(document.querySelectorAll("td > span")).forEach(function (node) {
		node.style.width = picMaxWidth + "px";
		node.style.height = picMaxWidth + "px";
	});
	setTimeout(function () {
		recalculate();
	}, 400);
};

window.addEventListener("orientationchange", recalculate);

window.addEventListener("load", recalculate);

window.mosaicAddListeners = function () {

	Array.prototype.slice.call(document.querySelectorAll("td > span > a")).forEach(function (node, i) {
		node.addEventListener("click", function (ev) {

			galleryImages = [];

			Array.prototype.slice.call(document.querySelectorAll("td > span > a")).forEach(function (node) {
				galleryImages.push({
					href: node.href,
					title: node.querySelector("img").getAttribute("title") + "\n" + node.parentElement.getAttribute("title")
				});
			});

			ev.preventDefault();
			if (shouldFire) {
				Gallery = blueimp.Gallery(galleryImages, {
					fullscreen: true,
					onclosed: function () {
						var node = document.querySelector("#blueimp-gallery");
						if (node.hasAttribute("opened")) {
							node.removeAttribute("opened");
						}
						node.setAttribute("closed", "");
					},
					onopened: function () {
						var node = document.querySelector("#blueimp-gallery");
						if (node.hasAttribute("closed")) {
							node.removeAttribute("closed");
						}
						node.setAttribute("opened", "");
					}
				});
				Gallery.slide(i, 400);

			}
		});
	});
};

window.addEventListener("load", function () {

	shouldFire = true;
	window.mosaicAddListeners();

	window.location.search.replace("?", "").split("&").map(function (pair) {
		var arr = pair.split("=");
		return {
			key: arr[0],
			value: arr[1]
		};
	}).forEach(function (param) {
		// if in params there is simulator = true -> prevent default event listeners
		if (param.key === "simulator" && param.value === "true") {
			shouldFire = false;
			Array.prototype.slice.call(document.querySelectorAll("td > span > a")).forEach(function (node) {
				node.addEventListener("click", function () {
					return false;
				}, true);
			});
		}
	});

	Array.prototype.slice.call(document.querySelectorAll("td > span > a")).forEach(function (node) {
		node.addEventListener("click", function () {
			return false;
		}, true);
	});
});
