<?php
/* * ***********************************************************************************
 * pli.php
 * --------
 * Author: Robert AH Prins (robert@prino.org)
 * Copyright: (c) 2011 Robert AH Prins (http://hitchwiki.org/en/User:Prino)
 * Release Version: 1.0.8.11
 * Date Started: 2011/02/09
 *
 * PL/I language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011/02/09 (1.0.8.10)
 *  -  First Release - machine(ish) generated by http://rosettacode.org/geshi/
 *
 * TODO (updated 2011/02/09)
 * -------------------------
 *
 *
 * ************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * ********************************************************************************** */

$language_data = array(
	'LANG_NAME'              => 'PL/I',
	'COMMENT_SINGLE'         => array(),
	'COMMENT_MULTI'          => array('/*' => '*/'),
	'CASE_KEYWORDS'          => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS'             => array('"', '\''),
	'ESCAPE_CHAR'            => '',
	'KEYWORDS'               => array(
		1 => array(
			'abnormal', 'abs', 'acos', 'acosf', 'add', 'addbuff', 'addr',
			'addrdata', 'alias', 'aligned', 'all', 'alloc', 'allocate',
			'allocation', 'allocn', 'allocsize', 'any', 'anycondition', 'area',
			'ascii', 'asin', 'asinf', 'asm', 'asmtdli', 'assembler',
			'assignable', 'atan', 'atand', 'atanf', 'atanh', 'attach',
			'attention', 'attn', 'auto', 'automatic', 'availablearea',
			'backwards', 'based', 'begin', 'bigendian', 'bin', 'binary',
			'binaryvalue', 'bind', 'binvalue', 'bit', 'bitloc', 'bitlocation',
			'bkwd', 'blksize', 'bool', 'buf', 'buffered', 'buffers', 'bufnd',
			'bufni', 'bufoff', 'bufsp', 'builtin', 'bx', 'by', 'byaddr', 'byte',
			'byvalue', 'b4', 'call', 'cast', 'cds', 'ceil', 'center',
			'centerleft', 'centerright', 'centre', 'centreleft', 'centreright',
			'char', 'character', 'charg', 'chargraphic', 'charval', 'check',
			'checkstg', 'close', 'cmpat', 'cobol', 'col', 'collate', 'column',
			'comment', 'compare', 'compiledate', 'compiletime', 'completion',
			'complex', 'cond', 'condition', 'conjg', 'conn', 'connected',
			'consecutive', 'controlled', 'conv', 'conversion', 'copy', 'cos',
			'cosd', 'cosf', 'cosh', 'count', 'counter', 'cpln', 'cplx', 'cs',
			'cstg', 'ctl', 'ctlasa', 'ctl360', 'currentsize', 'currentstorage',
			'data', 'datafield', 'date', 'datetime', 'days', 'daystodate',
			'daystosecs', 'db', 'dcl', 'dec', 'decimal', 'declare', 'def',
			'default', 'define', 'defined', 'delay', 'delete', 'descriptor',
			'descriptors', 'detach', 'dft', 'dim', 'dimacross', 'dimension',
			'direct', 'display', 'divide', 'do', 'downthru', 'edit', 'else',
			'empty', 'end', 'endfile', 'endpage', 'entry', 'entryaddr', 'env',
			'environment', 'epsilon', 'erf', 'erfc', 'error', 'event', 'excl',
			'exclusive', 'exit', 'exp', 'expf', 'exponent', 'exports', 'ext',
			'external', 'fb', 'fbs', 'fetch', 'file', 'fileddint', 'fileddtest',
			'fileddword', 'fileid', 'fileopen', 'fileread', 'fileseek',
			'filetell', 'filewrite', 'finish', 'first', 'fixed', 'fixedbin',
			'fixeddec', 'fixedoverflow', 'float', 'floatbin', 'floatdec',
			'floor', 'flush', 'fofl', 'format', 'fortran', 'free', 'from',
			'fromalien', 'fs', 'gamma', 'generic', 'genkey', 'get', 'getenv',
			'go', 'goto', 'graphic', 'gx', 'handle', 'hbound', 'hex', 'hexadec',
			'heximage', 'high', 'huge', 'iand', 'ieee', 'ieor', 'if', 'ignore',
			'imag', 'in', 'index', 'indexarea', 'indexed', 'init', 'initial',
			'inline', 'inonly', 'inot', 'inout', 'input', 'int', 'inter',
			'internal', 'into', 'invalidop', 'ior', 'irred', 'irreducible',
			'isfinite', 'isigned', 'isinf', 'isll', 'ismain', 'isnan',
			'isnormal', 'isrl', 'iszero', 'iunsigned', 'key', 'keyed',
			'keyfrom', 'keylength', 'keyloc', 'keyto', 'label', 'last',
			'lbound', 'leave', 'left', 'length', 'like', 'limited', 'line',
			'lineno', 'linesize', 'linkage', 'list', 'littleendian', 'loc',
			'locate', 'location', 'log', 'logf', 'loggamma', 'log10', 'log10f',
			'log2', 'low', 'lowercase', 'lower2', 'maccol', 'maclmar',
			'macname', 'macrmar', 'main', 'max', 'maxexp', 'maxlength',
			'memconvert', 'memcu12', 'memcu14', 'memcu21', 'memcu24', 'memcu41',
			'memcu42', 'memindex', 'memsearch', 'memsearchr', 'memverify',
			'memverifyr', 'min', 'minexp', 'mod', 'mpstr', 'multiply', 'name',
			'native', 'ncp', 'new', 'nocharg', 'nochargraphic', 'nocheck',
			'nocmpat', 'noconv', 'noconversion', 'nodescriptor', 'noexecops',
			'nofixedoverflow', 'nofofl', 'noinline', 'nolock', 'nomap',
			'nomapin', 'nomapout', 'nonasgn', 'nonassignable', 'nonconnected',
			'nonnative', 'noofl', 'nooverflow', 'norescan', 'normal', 'nosize',
			'nostrg', 'nostringrange', 'nostringsize', 'nostrz', 'nosubrg',
			'nosubscriptrange', 'noufl', 'nounderflow', 'nowrite', 'nozdiv',
			'nozerodivide', 'null', 'offset', 'offsetadd', 'offsetdiff',
			'offsetsubtract', 'offsetvalue', 'ofl', 'omitted', 'on', 'onarea',
			'onchar', 'oncode', 'oncondcond', 'oncondid', 'oncount', 'onfile',
			'ongsource', 'onkey', 'online', 'onloc', 'onoffset', 'onsource',
			'onsubcode', 'onwchar', 'onwsource', 'open', 'optional', 'options',
			'order', 'ordinal', 'ordinalname', 'ordinalpred', 'ordinalsucc',
			'other', 'otherwise', 'outonly', 'output', 'overflow', 'package',
			'packagename', 'page', 'pageno', 'pagesize', 'parameter', 'parmset',
			'password', 'pending', 'pic', 'picspec', 'picture', 'places',
			'pliascii', 'plicanc', 'plickpt', 'plidelete', 'plidump',
			'pliebcdic', 'plifill', 'plifree', 'plimove', 'pliover', 'plirest',
			'pliretc', 'pliretv', 'plisaxa', 'plisaxb', 'plisaxc', 'plisaxd',
			'plisrta', 'plisrtb', 'plisrtc', 'plisrtd', 'plitdli', 'plitran11',
			'plitran12', 'plitran21', 'plitran22', 'pointer', 'pointeradd',
			'pointerdiff', 'pointersubtract', 'pointervalue', 'poly', 'pos',
			'position', 'prec', 'precision', 'pred', 'present', 'print',
			'priority', 'proc', 'procedure', 'procedurename', 'procname',
			'prod', 'ptr', 'ptradd', 'ptrdiff', 'ptrsubtract', 'ptrvalue',
			'put', 'putenv', 'quote', 'radix', 'raise2', 'random', 'range',
			'rank', 'read', 'real', 'record', 'recsize', 'recursive', 'red',
			'reducible', 'reentrant', 'refer', 'regional', 'reg12', 'release',
			'rem', 'reorder', 'repattern', 'repeat', 'replaceby2', 'reply',
			'reread', 'rescan', 'reserved', 'reserves', 'resignal', 'respec',
			'retcode', 'return', 'returns', 'reuse', 'reverse', 'revert',
			'rewrite', 'right', 'round', 'rounddec', 'samekey', 'scalarvarying',
			'scale', 'search', 'searchr', 'secs', 'secstodate', 'secstodays',
			'select', 'seql', 'sequential', 'serialize4', 'set', 'sign',
			'signal', 'signed', 'sin', 'sind', 'sinf', 'sinh', 'sis', 'size',
			'skip', 'snap', 'sourcefile', 'sourceline', 'sqrt', 'sqrtf',
			'stackaddr', 'statement', 'static', 'status', 'stg', 'stmt', 'stop',
			'storage', 'stream', 'strg', 'string', 'stringrange', 'stringsize',
			'structure', 'strz', 'subrg', 'subscriptrange', 'substr',
			'subtract', 'succ', 'sum', 'suppress', 'sysin', 'sysnull',
			'sysparm', 'sysprint', 'system', 'sysversion', 'tally', 'tan',
			'tand', 'tanf', 'tanh', 'task', 'then', 'thread', 'threadid',
			'time', 'tiny', 'title', 'to', 'total', 'tpk', 'tpm', 'transient',
			'translate', 'transmit', 'trim', 'trkofl', 'trunc', 'type', 'ufl',
			'ulength', 'ulength16', 'ulength8', 'unal', 'unaligned',
			'unallocated', 'unbuf', 'unbuffered', 'undefinedfile', 'underflow',
			'undf', 'unlock', 'unsigned', 'unspec', 'until', 'update', 'upos',
			'uppercase', 'upthru', 'usubstr', 'usurrogate', 'uvalid', 'uwidth',
			'valid', 'validdate', 'value', 'var', 'varglist', 'vargsize',
			'variable', 'varying', 'varyingz', 'vb', 'vbs', 'verify', 'verifyr',
			'vs', 'vsam', 'wait', 'wchar', 'wcharval', 'weekday', 'when',
			'whigh', 'while', 'widechar', 'wlow', 'write', 'xmlchar', 'y4date',
			'y4julian', 'y4year', 'zdiv', 'zerodivide'
		)
	),
	'SYMBOLS'                => array(
		1 => array(
			'+', '-', '*', '/', '=', '<', '>', '&', '^', '|', ':', '(', ')', ';', ','
		)
	),
	'CASE_SENSITIVE'         => array(
		GESHI_COMMENTS => false,
		1              => false
	),
	'STYLES'                 => array(
		'KEYWORDS'    => array(
			1 => 'color: #b1b100;'
		),
		'COMMENTS'    => array(
			'MULTI' => 'color: #666666; font-style: italic;'
		),
		'ESCAPE_CHAR' => array(
			0 => 'color: #000099; font-weight: bold;'
		),
		'BRACKETS'    => array(
			0 => 'color: #009900;'
		),
		'STRINGS'     => array(
			0 => 'color: #0000ff;'
		),
		'NUMBERS'     => array(
			0 => 'color: #cc66cc;',
		),
		'METHODS'     => array(
			0 => 'color: #004000;'
		),
		'SYMBOLS'     => array(
			1 => 'color: #339933;'
		),
		'REGEXPS'     => array(),
		'SCRIPT'      => array()
	),
	'URLS'                   => array(1 => ''),
	'OOLANG'                 => true,
	'OBJECT_SPLITTERS'       => array(1 => '.'),
	'REGEXPS'                => array(),
	'STRICT_MODE_APPLIES'    => GESHI_NEVER,
	'SCRIPT_DELIMITERS'      => array(),
	'HIGHLIGHT_STRICT_BLOCK' => array()
);
?>
