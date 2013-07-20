#!/bin/bash

# Build the Framework
/mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/make

echo "Removing old framework files."
rm -rf /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Site/backend/framework
rm -rf /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Site/frontend/framework

echo "Copying new framework files."
cp -r /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/backend/framework /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Site_1311/backend/
cp -r /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/frontend/framework /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Site_1311/frontend/