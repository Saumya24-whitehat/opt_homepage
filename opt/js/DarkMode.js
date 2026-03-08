var isDarkMode;
		isDarkMode = localStorage.getItem("isDarkMode") === "true";
		if (isDarkMode === true) {
			$("body").addClass("dark-theme");
			$("#theme-toggle").prop("checked", true);
		}
		// console.log(isDarkMode, 'isDarkMode');

		$("#theme-toggle").click(function() {
			if ($("body").hasClass("dark-theme")) {
				$("body").removeClass("dark-theme");
				localStorage.setItem("isDarkMode", false);
				isDarkMode = false;
				// setLightModeOptions();
			} else {
				$("body").addClass("dark-theme");
				localStorage.setItem("isDarkMode", true);
				isDarkMode = true;
				// setDarkModeOptions();
			}
		});