if update == True:
        file = os.path.abspath("cth.py")
        url = "https://github.com/bcsetris7/allenc/releases/download/v" + version  + "/allenc.py"                                                                   jsonFile = "https://0xblackbird.github.io/data.json"

        if os.path.isfile(file) == False:
                print(color.RED + "[-] Error! I could not find the script to update! Please provide the installation path:" + color.END)
                file = str(input(color.BLUE + ">>> " + color.RED))
