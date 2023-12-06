import "@blocknote/core/style.css"
import { BlockNoteView, useBlockNote } from "@blocknote/react"
import "./styles.css"

export default function FilamentBlockNoteEditor({ value, onChange, uploadFile })
{
    const editor = useBlockNote({
        initialContent: value ? JSON.parse(value) : undefined,
        onEditorContentChange: onChange,
        uploadFile: uploadFile,
    })

    return <BlockNoteView editor={editor} />
}
