class Search_Suggestion
{
	constructor(label, sql, keywords, icon='<i class="fa fa-search"></i>')
	{
		this.label = label;
		this.sql = sql;
		this.keywords = [label];
		this.keywords.push(keywords);
		this.icon = icon;
		this.HTML = 
		'<button class="searchSuggestion">' + this.icon + 
		' <span>' + this.label + '</span></button>';
	}

	addKeywords(keywords)
	{
		this.keywords.push(keywords);
	}

	set keywords(keywords)
	{
		this.keywords = keywords;
	}

	get keywords()
	{
		return this.keywords;
	}

	set label(label)
	{
		this.label = label;
	}

	get label()
	{
		return this.label;
	}

	set sql(sql)
	{
		this.sql = sql;
	}

	get sql()
	{
		return this.sql;
	}

	set icon(icon)
	{
		this.icon = icon;
	}

	get icon()
	{
		return this.icon;
	}
}

// !!!!!!!!!! WRITE SQL CODE

var Search_Suggestions = [];

Search_Suggestions.push(

	new Search_Suggestion('Shockers', 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state', 'graduat'])

);

Search_Suggestions.push(

	new Search_Suggestion('Recently Graduated', 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);

Search_Suggestions.push(

	new Search_Suggestion('Older Graduates', 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);

Search_Suggestions.push(

	new Search_Suggestion("Today's Entries", 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);

Search_Suggestions.push(

	new Search_Suggestion("Entries Sorted By Month", 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);

Search_Suggestions.push(

	new Search_Suggestion("Entries Sorted By Day", 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);

Search_Suggestions.push(

	new Search_Suggestion("Entries Sorted By Year", 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);

Search_Suggestions.push(

	new Search_Suggestion("Entries Sorted By Location", 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);

Search_Suggestions.push(

	new Search_Suggestion("Industry Partners opted for One day Involvement", 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);

Search_Suggestions.push(

	new Search_Suggestion("Industry Partners opted for a Recurring Relationship", 
		sql, 
		['campus','employee','scholars','university','wsu','alumni', 
		 'student', 'shocker', 'wichita', 'state'])
	
);


