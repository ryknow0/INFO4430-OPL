using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace OremLibrary.Models
{
    public class Report
    {
        public virtual int ReportId { get; set; }
        public virtual int EventId { get; set; }
        public List<Event> Events { get; set; }
    }
}