{"version":3,"file":"ai_copilot_button.map.js","names":["BX","namespace","COPILOT_WIDTH","COPILOT_INPUT_HEIGHT","COPILOT_PADDING","EDITOR_HEADER_HEIGHT","Landing","UI","Button","AiCopilot","id","options","EditorAction","apply","this","arguments","onReplace","onReplaceContext","onAddBelow","editor","clientHeight","document","documentElement","clientWidth","getInstance","instance","prototype","constructor","__proto__","onClick","Env","getOptions","Main","InfoHelper","show","isInit","Dom","addClass","layout","clickBeforeInit","context","selectedText","window","getSelection","toString","selectedContext","currentElement","fieldInput","querySelector","innerHTML","copilot","hideEditorPanel","setSelectedText","width","onMouseOver","top","AI","Copilot","moduleId","contextId","getContext","category","subscribe","finishInitHandler","bind","saveHandler","addBelowHandler","Event","EventEmitter","onClickHandler","onWindowKeyDownHandler","onScrollHandler","init","copilotPositionTop","copilotPositionLeft","removeClass","event","data","result","isShown","hide","key","currentScrollY","scrollY","lastScrollY","diffScroll","maxAllowedHeight","adjust","position","left","strictMode","Panel","EditorPanel"],"sources":["ai_copilot_button.js"],"mappings":"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"}