<%

    current_server = Request.ServerVariables("SERVER_NAME")

    the_path = Server.MapPath("grooves/grooves/")
    'response.write the_path
    'response.end
        Dim objFSO, objFile, objFolder

        Set objFSO = Server.CreateObject("Scripting.FileSystemObject")
        IF objFSO.FolderExists(the_path) THEN

            Set objFolder = objFSO.GetFolder(the_path)
                     
            For Each folder in objFolder.SubFolders
                                
                            
                        

            Next
            For Each objFile in objFolder.Files
                Response.Write "<a class=""file_link"" href=""http://" & current_server & "/access/" & objFile.Name & """ target=""_blank"">" & objFile.Name & "</a><br />"&_
                                "<a href=""upload_form.asp?rid=" & request("rid") & "&delete=" &server.URLEncode(objFile.Name) & """ style=""color:red"">DELETE</><br />"
            Next

        END IF
        Set objFolder = Nothing
        Set objFSO = Nothing
 %>
