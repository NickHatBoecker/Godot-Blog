/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss'

import { RichText, useBlockProps } from '@wordpress/block-editor';
import { TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
    const { title, content } = attributes;
    const blockProps = useBlockProps();

    return (
        <div {...blockProps}>
            <TextControl
                label="Headline"
                value={title}
                onChange={(title) => setAttributes({ title })}
                placeholder="Infobox headline"
            />

            <RichText
                tagName="div"
                value={content}
                onChange={(content) => setAttributes({ content })}
                placeholder="Enter infobox content ..."
            />
        </div>
    );
}
