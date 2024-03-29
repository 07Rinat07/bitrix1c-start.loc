import BaseEvent from './base.event';

export class DragOutEvent extends BaseEvent
{
	data: {
		clientX: number,
		clientY: number,
		source: HTMLElement,
		sourceContainer: HTMLElement,
		originalSource: HTMLElement,
		out: HTMLElement,
		outContainer: HTMLElement,
	};
}
