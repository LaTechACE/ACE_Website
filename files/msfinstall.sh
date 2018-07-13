# download and install metasploit
 
sudo curl https://raw.githubusercontent.com/rapid7/metasploit-omnibus/master/config/templates/metasploit-framework-wrappers/msfupdate.erb > msfinstall
sudo chmod 755 msfinstall
sudo ./msfinstall
 
# download armitage and set up aliases
 
mkdir ~/.bin
sudo wget http://www.fastandeasyhacking.com/download/armitage150813.tgz --directory-prefix=~/.bin
sudo tar xvzf ~/.bin/armitage150813.tgz
echo "alias armitage='~/.bin/armitage/armitage'" >> ~/.bash_aliases
alias armitage='~/.bin/armitage/armitage'
 
# cleanup

sudo rm ~/.bin/armitage150813.tgz

