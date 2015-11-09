#include <iostream>

void mapstring(std::string str) {
	std::string all =
		"ABCDEFGHIJKLMNOPQRSTUVWXYZ"
		"abcdefghijklmnopqrstuvwxyz"
		"0123456789.";
	std::string key = "";
	std::string val = "";

	bool mke = false;
	char qut = '\0';

	for (char& chr: str) {
		// quoted text
		if (qut != '\0') {
			if (chr == qut) {
				qut = '\0';
			}
			else {
				val += chr;
			}
		}
		// quotes found
		else if (chr == '\'' || chr == '"') {
			qut = chr;
		}
		// make
		else if (chr == ',' || chr == ']' || chr == '}' || chr == ';') {
			if (!key.empty()) {
				std::cout << key << " => " << val << std::endl;
			}
			key = "";
			val = "";
		}
		// key value switcher
		else if (chr == ':' || chr == '=') {
			key = val;
			val = "";
		}
		// new block
		else if (chr == '{' || chr == '[') {
			key = "";
			val = "";
		}
		// letters, numbers and dots
		else if (std::find(std::begin(all), std::end(all), chr) != std::end(all)) {
			val += chr;
		}
	}
}
