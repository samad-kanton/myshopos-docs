export const error = (
    err: string,
    expression?: string,
    el?: HTMLElement
): void => {
    let message = `LeafUI Error: "${err}"`;
    if (expression) message += `\n\nExpression: "${expression}"`;
    if (el) message += `\nElement:`;
    console.warn(message, el);
};
