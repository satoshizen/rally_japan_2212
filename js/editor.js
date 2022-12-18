(function () {
	// 背景黒の段落スタイル
	wp.blocks.registerBlockStyle("core/paragraph", {
		name: "h p-bg-black",
		label: "背景黒の段落",
	});
	// 構文タイトル
	wp.blocks.registerBlockStyle("core/heading", {
		name: "h h-syntax",
		label: "構文タイトル",
	});
})();