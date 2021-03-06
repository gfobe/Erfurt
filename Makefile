default:
	@echo "please use:"
	@echo "     'make cs-install' (install CodeSniffer)"
	@echo "     'make cs-uninstall' (uninstall CodeSniffer)"
	@echo "     'make cs-enable' (enable CodeSniffer to check code before every commit)"
	@echo "     'make cs-disable' (disable CodeSniffer code checking)"
	@echo "     'make cs-check-commit' (run pre-commit code checking manually)"
	@echo "     'make cs-check-commit-emacs' (same as cs-check-commit with emacs output)"
	@echo "     'make cs-check-commit-intensive' (run pre-commit code checking"
	@echo "             manually with stricter coding standard)"
	@echo "     'make cs-check (run complete code checking)"
	@echo "     'make cs-check-full' (run complete code checking with detailed output)"
	@echo "     'make cs-check-emacs' (run complete code checking with with emacs output)"
	@echo "     'make cs-check-blame' (run complete code checking with blame list output)"
	@echo "     'make cs-check-intensive' (run complete code checking with"
	@echo "             stricter coding standard)"
	@echo "     'make cs-check-intensive-full' (run complete code checking with"
	@echo "             stricter coding standard and detailed output)"
	@echo "     'possible Parameter:"
	@echo "     'FPATH=<path>' (run code checking on specific relative path)"
	@echo "     'SNIFFS=<sniff 1>,<sniff 2>' (run code checking on specific sniffs)"
	@echo "     'OPTIONS=<option>' (run code checking with specific CodeSniffer options)"

# coding standard

# #### config ####
# cs-script path
CSSPATH = tests/CodeSniffer/
# ignore pattern
IGNOREPATTERN = */libraries/*,*/Parser/Sparql10/*,*/Parser/Sparql11/*

# Parameter check
ifndef FPATH
	FPATH = "./"
endif
ifdef SNIFFS
	SNIFFSTR = "--sniffs="$(SNIFFS)
else
	SNIFFSTR =
endif

REQUESTSTR = --ignore=$(IGNOREPATTERN) $(OPTIONS) $(SNIFFSTR)  $(FPATH)

cs-default:
	chmod ugo+x "$(CSSPATH)cs-scripts.sh"
	
cs-install: cs-default
	$(CSSPATH)cs-scripts.sh -i

cs-uninstall: cs-default
	$(CSSPATH)cs-scripts.sh -u

cs-enable: cs-default
	$(CSSPATH)cs-scripts.sh -f $(CSSPATH) -e

cs-disable: cs-default
	$(CSSPATH)cs-scripts.sh -d

cs-check-commit:
	$(CSSPATH)cs-scripts.sh -p ""
cs-check-commit-emacs:
	$(CSSPATH)cs-scripts.sh -p "-remacs"
cs-check-commit-intensive:
	$(CSSPATH)cs-scripts.sh -p "-s"

cs-check:
	$(CSSPATH)cs-scripts.sh -c "-s --report=summary $(REQUESTSTR)"
cs-check-intensive:
	$(CSSPATH)cs-scripts.sh -s -c "-s --report=summary $(REQUESTSTR)"
cs-check-intensive-full:
	$(CSSPATH)cs-scripts.sh -s -c "-s --report=full $(REQUESTSTR)"
cs-check-full:
	$(CSSPATH)cs-scripts.sh -c "-s --report=full $(REQUESTSTR)"
cs-check-emacs:
	$(CSSPATH)cs-scripts.sh -c "--report=emacs $(REQUESTSTR)"
cs-check-blame:
	$(CSSPATH)cs-scripts.sh -s -c "--report=gitblame $(REQUESTSTR)"
