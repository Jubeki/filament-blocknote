import { useCreateBlockNote } from "@blocknote/react";
import { BlockNoteView } from "@blocknote/mantine";
import "@blocknote/mantine/style.css";

export default function FilamentBlockNoteEditor({ value, onChange, uploadFile })
{
    const editor = useCreateBlockNote({
        initialContent: value ? JSON.parse(value) : undefined,
        onChange: onChange,
        uploadFile: uploadFile,
    })

    return <BlockNoteView editor={editor} />
}
