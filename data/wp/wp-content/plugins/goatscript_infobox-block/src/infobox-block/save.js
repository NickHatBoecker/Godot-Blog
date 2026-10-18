import { RichText, useBlockProps } from '@wordpress/block-editor'

export default function save ({attributes}) {
    const {title, content} = attributes
    const blockProps = useBlockProps.save({
        className: 'callout',
    })

    return (
        <aside { ...blockProps }>
            { title && (
                <RichText.Content
                    tagName="strong"
                    className="infobox-title"
                    value={ title }
                />
            ) }

            <RichText.Content
                tagName="div"
                className="infobox-content"
                value={ content }
            />
        </aside>
    )
}
