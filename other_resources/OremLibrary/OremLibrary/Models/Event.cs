using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace OremLibrary.Models
{
    public class Event
    {
        public virtual int EventId { get; set; }
        public virtual int EmployeeId { get; set; }
        public virtual int Attendance { get; set; }
        public virtual string Type { get; set; }
        public virtual string Description { get; set; }
        public virtual string EventLocation { get; set; }
        public virtual string Category { get; set; }
        public virtual string Topic { get; set; }
        public virtual char TargetAudience  { get; set; }
        public virtual DateTime EventDate { get; set; }
        public virtual DateTime EventTime { get; set; }
        public Employee Employee { get; set; }
        

    }
}